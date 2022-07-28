import {useContext} from "react";
import {Navigate, Outlet, useLocation} from "react-router-dom";
import Loading from "../loading/loading.component";
import {AuthContext} from "../../contexts/auth.context";

const UnprotectedRoute = ({ children }) => {
  const { currentUser, isLoading } = useContext(AuthContext)

  return <Outlet />
}

export default UnprotectedRoute