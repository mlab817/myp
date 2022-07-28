import axios from 'axios'

const api = axios.create({
  baseURL: 'http://localhost:8000/api'
})

api.interceptors.request.use(config => {
  const token = localStorage.getItem('API_TOKEN')

  if (token) {
    config.headers = {
      'Authorization': `Bearer ${token}`,
      'Content-Type': 'application/json',
      'Accept': 'application/json',
    }
  }

  return config
}, error => {})

export const postLogin = async ({ email, password }) => {
  try {
    const response = await api.post('/login', { email, password })
    const { access_token } = response.data

    localStorage.setItem('API_TOKEN', access_token)
  } catch (err) {
    console.log(err.message)
  }
}

export const getUser = async () => {
  try {
    const response = await api.get('/me')
    const user = response.data

    console.log(user)
  } catch (err) {
    console.log(err.message)
  }
}