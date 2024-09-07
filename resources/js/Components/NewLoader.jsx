import React, { useState, useEffect } from 'react';
import './App.css'; // Ensure you have a CSS file for styling

const App = () => {
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    const timer = setTimeout(() => {
      setLoading(false);
    }, 4000); // Duration for the loader to show
    return () => clearTimeout(timer);
  }, []);

  return (
    <div className="app">
      {loading ? (
        <div className="loader-container">
          <div className="lds-ripple">
            <div></div>
            <div></div>
          </div>
        </div>
      ) : (
        <div className="content">
          <h1>Welcome to the Site!</h1>
        </div>
      )}
    </div>
  );
};

export default App;
