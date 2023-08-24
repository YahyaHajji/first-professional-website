<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(5);
        return view('adminsMangement', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addAdmin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string',
            'email' => 'required|email|unique:users', // Ensure email is unique in 'admins' users
            'password' => 'required|min:8', // Password should be at least 8 characters long
        ], [
            'nom.required' => 'Le champ nom est obligatoire.',
            'email.required' => 'Le champ email est obligatoire.',
            'email.email' => "L'email doit être une adresse email valide.",
            'email.unique' => 'Cette email est déjà utilisé.',
            'password.required' => 'Le champ password est obligatoire.',
            'password.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
        ]);

        // Create a new admin instance and fill it with the form data
        $admin = new User();
        $admin->name = $validatedData['nom'];
        $admin->email = $validatedData['email'];
        $admin->password = bcrypt($validatedData['password']); // Encrypt the password before saving

        // Save the admin to the database
        $admin->save();

        // Redirect to a success page or to the page where you want to display the added admin
        return redirect()->route('admins.index')->with('success', 'Admin ajouté avec succès.');

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
    public function edit(string $id)
    {
        $users = User::findOrFail($id);
        return view('editAdmin', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the form data for updating the admin
        $validatedData = $request->validate([
            'nom' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'required|string|min:8',
        ], [
            'nom.required' => 'Le champ nom est obligatoire.',
            'email.required' => 'Le champ email est obligatoire.',
            'email.email' => 'Veuillez saisir une adresse email valide.',
            'email.unique' => 'Cette adresse email est déjà utilisée par un autre utilisateur.',
            'password.required' => 'Le champ password est obligatoire.',
            'password.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
        ]);

        // Retrieve the admin with the given ID
        $admin = User::findOrFail($id);

        // Update the admin data
        $admin->name = $validatedData['nom'];
        $admin->email = $validatedData['email'];
        $admin->password = bcrypt($validatedData['password']);

        // Save the updated admin to the database
        $admin->save();

        // Redirect to a success page or to the page where you want to display the updated admin
        return redirect()->route('admins.index')->with('success', 'Admin mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin = User::findOrFail($id);
        $admin->delete();
        return redirect()->back()->with('success', 'Admin supprimée avec succès.');
    }
}
