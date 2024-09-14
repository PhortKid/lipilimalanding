//import { DarkThemeToggle } from "flowbite-react";
import { Navbar ,Button} from "flowbite-react";
//import { Outlet} from "react-router-dom";
//import Futa from "./Component/Futa";
import { Avatar } from "flowbite-react";



export default function Naviibar() {
   // <img src="https://www.lipilimatower.co.tz/assets/images/logo.jpg" className="mr-3 h-6 sm:h-9" alt="my logo" />
  return (
    <>
    <Navbar fluid >
      <Navbar.Brand  href="#">
      <Avatar img="https://www.lipilimatower.co.tz/assets/images/logo.jpg"  rounded bordered />
      {/* animate-wave  */}
        <span className="self-center whitespace-nowrap text-xl font-semibold dark:text-white animate-wave  text-gray-900"> LIPILIMA TOWER </span>
      </Navbar.Brand>
     
      <div className="flex md:order-2">
        <Button href="/start_book" className=" hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 ">Book</Button>
        <Navbar.Toggle />
      </div>
      <Navbar.Collapse>
        <Navbar.Link href="/"  className="hover:-translate-y-1 hover:scale-110 duration-300 ">
          Home
        </Navbar.Link>
        <Navbar.Link  href="/start_book" className="hover:-translate-y-1 hover:scale-110 duration-300 ">
          Book
        </Navbar.Link>
       

        <Navbar.Link href={ route('contact')} className="hover:-translate-y-1 hover:scale-110 duration-300 ">Contact</Navbar.Link>
        <Navbar.Link href="#">
     
        </Navbar.Link>
       
      </Navbar.Collapse>
    </Navbar>
   
    
   
    </>
  );
}


/*
   

        <Navbar.Link href="#">Contact</Navbar.Link>
        <Navbar.Link href="#">
        <DarkThemeToggle />
        </Navbar.Link>

*/