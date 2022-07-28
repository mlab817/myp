import {createContext, useEffect, useState} from "react";
import {getUser, postLogin} from "../utils/axios.utils";

export const AuthContext = createContext({
  currentUser: null,
  isLoading: true,
  setCurrentUser: () => null,
  login: () => null,
  setIsLoading: () => null
})

export const AuthProvider = ({ children }) => {
  const [currentUser, setCurrentUser] = useState(null)

  const [isLoading, setIsLoading] = useState(true)

  const login = ({ email, password }) => {
    postLogin({ email, password })
    const user = getUser()
    setCurrentUser(user)
  }

  const value = { currentUser, setCurrentUser, isLoading, setIsLoading, login }

  return <AuthContext.Provider value={value}>{children}</AuthContext.Provider>
}
