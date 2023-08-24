<?php

namespace App\Http\Controllers;

use App\Models\certification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addCertif');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'titre' => 'required|string',
            'prix' => 'required|numeric',
            'categorie' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            "titre" => "Le champ titre est obligatoire.",
            "prix" => 'Le prix doit être numérique.',
            "categorie" => "Cette categorie n'existe pas.",
            "image" => "L'image doit être au format jpeg/png/jpg/gif.",
        ]);

        // Process and store the image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->storePublicly('images', 'public');
        } else {
            // Handle error if no image is uploaded
            return redirect()->back()->with('error', 'Veuillez sélectionner une image.');
        }

        // Create a new certification instance and fill it with the form data
        $certification = new Certification();
        $certification->title = $validatedData['titre'];
        $certification->price = $validatedData['prix'];
        $certification->categorie = $validatedData['categorie'];
        $certification->image = $imagePath;

        // Save the certification to the database
        $certification->save();

        // Redirect to a success page or to the page where you want to display the added certification
        return redirect()->back()->with('success', 'Certification ajoutée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $certifs = Certification::findOrFail($id);
        $certification = Certification::distinct('categorie')->pluck('categorie');
        return view('editCertif', compact('certification', 'certifs'));

    }
    
    
    public function update(Request $request, $id)
    {
        // Validate the form data for updating the certification
        $validatedData = $request->validate([
            'titre' => 'required|string',
            'prix' => 'required|numeric',
            'categorie' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Allow empty image for update
        ], [
            "titre.required" => "Le champ titre est obligatoire.",
            "prix.required" => 'Le prix doit être numérique.',
            "categorie.required" => "Cette categorie n'existe pas.",
            "image.image" => "L'image doit être au format jpeg/png/jpg/gif.",
        ]);
    
        // Retrieve the certification with the given ID
        $certification = Certification::findOrFail($id);
    
        // Update the certification data
        $certification->title = $validatedData['titre'];
        $certification->price = $validatedData['prix'];
        $certification->categorie = $validatedData['categorie'];
    
        // Process and store the updated image, if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->storePublicly('images', 'public');
            $certification->image = $imagePath;
        }
    
        // Save the updated certification to the database
        $certification->save();
    
        // Redirect to a success page or to the page where you want to display the updated certification
        return redirect()->back()->with('success', 'Certification mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $certification = Certification::findOrFail($id);
    $certification->delete();
    return redirect()->back()->with('success', 'Certification supprimée avec succès.');
}


    public function AuthForm()
    {
        return view('AuthForm');
    }

    public function Authentification(Request $req)
    {
        $email = $req->input('email');
        $password = $req->input('password');
    
        // Find the user with the given email
        $user = User::where('email', $email)->first();
  
        if (!empty($user)) {
            // Verify the entered password against the hashed password
            if (Hash::check($password, $user->password)) {
               
                $username = explode('@', $email)[0]; // Extract the username part of the email
                $req->session()->put('login', $username); // Store the username in the session
                $users = User::all();
                $certs = Certification::all();
                return view('Welcome', compact('users', 'certs'));
            }
        }
    
        // If the user is not found or the password is incorrect, redirect back with an error message
        return redirect()->route('app.auth')->with('Error', '* Email ou mot de passe incorrect');
    }
    

    public function showCerti()
    {
        $certifs = Certification::orderBy('id', 'desc')->paginate(5);
        return view('certifsMangement', compact('certifs'));
    }

    public function search(Request $req)
    {
        try {
            $query = $req->input('search');

            $certifs = Certification::where('title', 'like', '%' . $query . '%')
                ->orWhere('categorie', 'like', '%' . $query . '%')
                ->orWhere('price', $query)
                ->paginate(5);

            return view('searchCertifs', compact('certifs'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function Logout()
    {
        session()->flush();
        return redirect()->route('app.auth');
    }
}
