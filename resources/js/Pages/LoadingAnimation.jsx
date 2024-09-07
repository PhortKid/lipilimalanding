 import { useState, useEffect } from 'react';

const LoadingAnimation = () => {
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    const timer = setTimeout(() => {
      setLoading(false);
    }, 4000);
    return () => clearTimeout(timer);
  }, []);

  return (
    <div
      className={`flex items-center justify-center w-full h-screen bg-gray-900 ${
        loading ? 'flex' : 'hidden'
      }`}
    >
      <div className="lds-ripple">
        <div className="bg-gray-400 w-20 h-20 rounded-full animate-ping" />
        <div className="bg-gray-400 w-20 h-20 rounded-full animate-ping animation-delay-200" />
      </div>
    </div>
  );
};

export default LoadingAnimation;