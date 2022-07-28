import { Suspense } from "react";
import {Routes, Route} from "react-router-dom";
import HomePage from "./pages/home.page";
import ProtectedRoute from "./components/protected-route/protected-route.component";
import UnprotectedRoute from "./components/unprotected-route/unprotected-route.component";
import Navigation from "./navigation/navigation.component";
import LoginPage from "./pages/login.page";
import Spinner from "./components/spinner/spinner.component";

const App = () => {
  return (
    <Suspense fallback={<Spinner />}>
      <Routes>
        <Route path="/login" element={<LoginPage />} />

        <Route path="/" element={<Navigation />}>
          <Route element={<UnprotectedRoute />}>
            <Route path="/" element={<HomePage />} />
          </Route>
        </Route>

        <Route element={<ProtectedRoute />}>

        </Route>
      </Routes>
    </Suspense>
  )
}

export default App
