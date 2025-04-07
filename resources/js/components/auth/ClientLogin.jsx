import React, { useState } from 'react';
import api from '../../services/api';

const ClientLogin = () => {
    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');
    const [error, setError] = useState('');

    const handleLogin = async (e) => {
        e.preventDefault();
        try {
            const res = await api.post('/client/login', { email, password });
            localStorage.setItem('token', res.data.token);
            alert('Connecté en tant que client');
        } catch (err) {
            setError('Email ou mot de passe incorrect');
        }
    };

    return (
        <form onSubmit={handleLogin}>
            <h2>Connexion Client</h2>
            {error && <p style={{ color: 'red' }}>{error}</p>}
            <input type="email" placeholder="Email" value={email} onChange={(e) => setEmail(e.target.value)} required />
            <input type="password" placeholder="Mot de passe" value={password} onChange={(e) => setPassword(e.target.value)} required />
            <button type="submit">Se connecter</button>
        </form>
    );
};

export default ClientLogin;
