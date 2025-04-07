import React, { useState } from 'react';
import axios from 'axios';

const ClientLogin = () => {
    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');
    const [error, setError] = useState('');

    const handleLogin = async (e) => {
        e.preventDefault();
        try {
            const response = await axios.post('http://localhost:8000/api/client/login', {
                email: 'exemple@email.com',
                password: 'secret'
            });
            localStorage.setItem('token', res.data.token);
            alert('Connecté en tant que client');
            // redirection ou autre action
        } catch (err) {
            setError('Identifiants invalides');
        }
    };

    return (
        <form onSubmit={handleLogin}>
            <h2>Connexion Client</h2>
            {error && <p style={{ color: 'red' }}>{error}</p>}
            <input type="email" value={email} onChange={(e) => setEmail(e.target.value)} placeholder="Email" required />
            <input type="password" value={password} onChange={(e) => setPassword(e.target.value)} placeholder="Mot de passe" required />
            <button type="submit">Se connecter</button>
        </form>
    );
};

export default ClientLogin;
