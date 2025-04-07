import React from 'react';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import ClientLogin from './components/auth/ClientLogin';
import OrganisateurLogin from './components/auth/OrganisateurLogin';
import AdministrateurLogin from './components/auth/AdministrateurLogin';

const App = () => {
    return (
        <Router>
            <Routes>
                <Route path="/client/login" element={<ClientLogin />} />
                <Route path="/organisateur/login" element={<OrganisateurLogin />} />
                <Route path="/admin/login" element={<AdministrateurLogin />} />
            </Routes>
        </Router>
    );
};

export default App;
