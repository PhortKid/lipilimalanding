import Futa from "../Components/Futa";
import Naviibar from "../Components/Naviibar";
import Booking from "../Pages/Booking";

function Book()
{
    //bg-gray-600

        const divStyle = {
        backgroundImage: 'url("https://www.lipilimatower.co.tz/assets/images/bg.jpg")',
        backgroundSize: 'cover',  // Adjust as needed
        backgroundPosition: 'center', // Adjust as needed
        height: '1200px', // Adjust as needed
        width: '100%',  // Adjust as needed
    };

    return (
        <>
        <div className="main-body-book " style={divStyle}>
        
         <Naviibar/>
        <div className="py-24 ">
       
        <Booking/>
       
        </div>
        </div>
       
        </>
    )
}

export default Book;