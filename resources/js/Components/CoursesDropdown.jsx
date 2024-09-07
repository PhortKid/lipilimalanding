
import { Dropdown } from "flowbite-react";

export default function CoursesDropdown() {
  return (
    <Dropdown label="Dropdown button" dismissOnClick={false}>
      <Dropdown.Item>Dashboard</Dropdown.Item>
      <Dropdown.Item>Settings</Dropdown.Item>
      <Dropdown.Item>Earnings</Dropdown.Item>
      <Dropdown.Item>Sign out</Dropdown.Item>
    </Dropdown>
  );
}