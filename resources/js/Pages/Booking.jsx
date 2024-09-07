// src/BookingForm.js
import React, { useState } from 'react';

const BookingForm = () => {
    const [bookingType, setBookingType] = useState('long');
    const [roomType, setRoomType] = useState('60000');
    const [numberOfDays, setNumberOfDays] = useState('30'); // Default to 30 for long booking
    const [extraGuests, setExtraGuests] = useState('0');
    const [totalCost, setTotalCost] = useState(null);

    const roomPrices = {
        60000: 'Tsh 60,000',
        80000: 'Tsh 80,000',
        100000: 'Tsh 100,000',
    };

    const handleBookingTypeChange = (e) => {
        const newBookingType = e.target.value;
        setBookingType(newBookingType);
        if (newBookingType === 'long') {
            setNumberOfDays('30'); // Set days to 30 for long booking
        } else if (newBookingType === 'short') {
            setNumberOfDays('1'); // Default to 1 for short booking
        } else {
            setNumberOfDays(''); // Clear days for custom booking
        }
    };

    const handleCalculateTotal = () => {
        let days = parseInt(numberOfDays, 10);

        // Validate number of days based on booking type
        if (bookingType === 'short' && (isNaN(days) || days < 1 || days > 30)) {
            alert('For short booking, please enter a valid number of days between 1 and 30.');
            return;
        }
        if (bookingType === 'custom' && (isNaN(days) || days < 1)) {
            alert('Please enter a valid number of days for custom booking.');
            return;
        }

        // For long booking, numberOfDays should always be 30
        if (bookingType === 'long') {
            days = 30;
        }

        const costPerDay = parseInt(roomType, 10);
        const numberOfExtraGuests = parseInt(extraGuests, 10);
        const additionalGuestCost = (numberOfExtraGuests * 25000);
        const totalCost = (costPerDay + additionalGuestCost) * days;

        setTotalCost(totalCost);
    };

    const handleIncrementDays = () => {
        if (bookingType === 'short') {
            setNumberOfDays((prevDays) => Math.min(parseInt(prevDays, 10) + 1, 30));
        }
    };

    const handleDecrementDays = () => {
        if (bookingType === 'short') {
            setNumberOfDays((prevDays) => Math.max(parseInt(prevDays, 10) - 1, 1));
        }
    };
const csrfToken = window.csrfToken; 
    return (
        <div className="max-w-xl mx-auto p-4  border-slate-950 bg-white shadow-lg rounded-lg ">
            <h1 className="text-2xl font-bold mb-4">Booking Form</h1>
            <form className="space-y-4 " action={route('booking_process.store')} method="POST">
                <div>
       
                            {/* Firstname */}
                       
                             <input type="text" name="firstname"  className="w-full h-14 shadow-sm text-gray-600 placeholder-text-400 text-lg font-normal leading-7 rounded-full border border-gray-200 focus:outline-none py-2 px-4 mb-8" placeholder="FirstName"/>
                            {/* Middlename */}
                     
                             <input type="hidden" name="_token" value={csrfToken}  />
                            <input type="text" name="midllename"  className="w-full h-14 shadow-sm text-gray-600 placeholder-text-400 text-lg font-normal leading-7 rounded-full border border-gray-200 focus:outline-none py-2 px-4 mb-8" placeholder="MiddleName"/>
                              {/* Lastname */}
                       
                            <input type="text" name="lastname"  className="w-full h-14 shadow-sm text-gray-600 placeholder-text-400 text-lg font-normal leading-7 rounded-full border border-gray-200 focus:outline-none py-2 px-4 mb-8" placeholder="LastName"/>
                              {/* Email */}
                      
                            <input type="text" name="email"  className="w-full h-14 shadow-sm text-gray-600 placeholder-text-400 text-lg font-normal leading-7 rounded-full border border-gray-200 focus:outline-none py-2 px-4 mb-8" placeholder="Email Address"/>
                            {/* Phone number */}
                     
                            <input type="text" name="phone_number"  className="w-full h-14 shadow-sm text-gray-600 placeholder-text-400 text-lg font-normal leading-7 rounded-full border border-gray-200 focus:outline-none py-2 px-4 mb-8" placeholder="+255-000-000-000"/>



                    <label className="block text-sm font-medium text-gray-700">Stay Time:</label>
                    <select
                        value={bookingType}
                        onChange={handleBookingTypeChange}
                        className="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                    >
                        <option value="long">Month (30 days)</option>
                        <option value="short">less than 29 Days</option>
                        <option value="custom">Select Manual</option>
                    </select>
                </div>

                <div>
                    <label className="block text-sm font-medium text-gray-700">Choose Room Price:</label>
                    <select
                        value={roomType}
                        onChange={(e) => setRoomType(e.target.value)}
                        className="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                    >
                        {Object.keys(roomPrices).map(key => (
                            <option key={key} value={key}>{roomPrices[key]}</option>
                        ))}
                    </select>
                </div>

                {bookingType === 'custom' && (
                    <div>
                        <label className="block text-sm font-medium text-gray-700">Number of Days:</label>
                        <input
                            type="number"
                            value={numberOfDays}
                            onChange={(e) => setNumberOfDays(e.target.value)}
                            min="1"
                            placeholder="Enter number of days"
                            className="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                        />
                    </div>
                )}

                {bookingType === 'short' && (
                    <div>
                        <label className="block text-sm font-medium text-gray-700">Number of Days:</label>
                        <div className="flex items-center space-x-2">
                            <input
                                type="number"
                                value={numberOfDays}
                                onChange={(e) => setNumberOfDays(e.target.value)}
                                min="1"
                                placeholder="Enter number of days"
                                className="mt-1 block w-1/2 border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                            />
                            <button
                                type="button"
                                onClick={handleIncrementDays}
                                className="px-3 py-1 bg-indigo-600 text-white rounded-md shadow-sm hover:bg-indigo-700"
                            >
                                +
                            </button>
                            <button
                                type="button"
                                onClick={handleDecrementDays}
                                className="px-3 py-1 bg-indigo-600 text-white rounded-md shadow-sm hover:bg-indigo-700"
                            >
                                -
                            </button>
                        </div>
                    </div>
                )}

                <div>
                    <label className="block text-sm font-medium text-gray-700">Number of Guests:</label>
                    <select
                        value={extraGuests}
                        onChange={(e) => setExtraGuests(e.target.value)}
                        className="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                    >
                        <option value="0">1 (default)</option>
                        <option value="1">2</option>
                        <option value="2">3</option>
                        <option value="3">4</option>
                        <option value="4">5</option>
                        <option value="5">6</option>
                        <option value="6">7</option>
                        <option value="7">8</option>
                    </select>
                </div>

                <input type="hidden"
                                value={totalCost}
                                name='total_amount'
                                min="1"
                                
                                className="mt-1 block w-1/2 border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50  "
                            />

                <button
                    type="button"
                    onClick={handleCalculateTotal}
                    className="w-full py-2 bg-indigo-600 text-white rounded-md shadow-sm hover:bg-indigo-700"
                >
                    Calculate Payment
                </button>
            

            {totalCost !== null && (
                <div className="mt-4 p-4 bg-gray-50 border border-gray-300 rounded-md">
                    <p className="text-lg font-semibold">Total Cost: Tsh {totalCost}/=Tsh</p>
                    <input
                        type='submit'
                        name="submit"
                        className="mt-2 w-full py-2 bg-green-600 text-white rounded-md shadow-sm hover:bg-green-700"
                       value="Book"
                    />
                </div>
               
            )}
             </form>
        </div>
    );
};

export default BookingForm;
