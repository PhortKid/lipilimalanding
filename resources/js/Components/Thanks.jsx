

const Thanks = ({ isOpen, onClose }) => {
  if (!isOpen) return null;

  return (
    <div className="fixed inset-0 flex items-center justify-center z-50">
      <div className="absolute inset-0 bg-gray-800 opacity-50" onClick={onClose}></div>
      <div className="bg-white rounded-lg shadow-lg p-6 relative z-10 w-80">
        <h2 className="text-xl font-semibold mb-4">Thanks!</h2>
        <p className="mb-6">Your submission has been received.</p>
        <button
          className="bg-indigo-600 text-white py-2 px-4 rounded hover:bg-indigo-800"
          onClick={onClose}
        >
          Close
        </button>
      </div>
    </div>
  );
};

export default Thanks;
