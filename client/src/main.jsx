import React from 'react'
import ReactDOM from 'react-dom/client'
import App from './App'
import { ThemeProvider, theme } from "@primer/react";
import './index.css'
import {BrowserRouter} from "react-router-dom";
import {AuthProvider} from "./contexts/auth.context";
import deepmerge from "deepmerge";

const customTheme = deepmerge(theme, {
  fonts: {
    mono: 'MonoLisa, monospace'
  }
})

ReactDOM.createRoot(document.getElementById('root')).render(
  <React.StrictMode>
    <ThemeProvider theme={customTheme}>
      <BrowserRouter>
        <AuthProvider>
          <App />
        </AuthProvider>
      </BrowserRouter>
    </ThemeProvider>
  </React.StrictMode>
)
