import {useContext} from "react";
import {Navigate, Outlet, useLocation} from "react-router-dom";
import Loading from "../loading/loading.component";
import {AuthContext} from "../../contexts/auth.context";

const ProtectedRoute = ({ children }) => {
  const { currentUser, isLoading } = useContext(AuthContext)
  const location = useLocation()

  if (isLoading) return <Loading />

  if (! currentUser) {
    return <Navigate to="/login" state={{ from: location }} />;
  }

  return <Outlet />
}

export default ProtectedRoute