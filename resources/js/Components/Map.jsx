// src/components/GoogleMap.js
import "../../css/index.css"
import React from 'react';

const Map = () => {
  return (
    
        <div className="w-full max-w-4xl p-4 bg-white shadow-lg rounded-lg">
          <h1 className="mb-4 text-4xl text-center  font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Location</h1>
          <div className="map-container">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d372.6727268936799!2d35.68975592973254!3d-7.783779557001616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x18543d006cbfdc8d%3A0xf9d2383652b542c2!2s6M8R%2B84R%20Lipilima%20Tower%2C%20A104%2C%20Iringa!3m2!1d-7.7837628!2d35.6902119!5e1!3m2!1sen!2stz!4v1725288023257!5m2!1sen!2stz"
              style={{ border: 0 }}
              allowFullScreen=""
              loading="lazy"
              title="Google Map"
            ></iframe>
          </div>
        </div>
  );
};

export default Map;
