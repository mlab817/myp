import {Box, Button, FormControl, PageLayout, TextInput} from "@primer/react";
import {useContext, useState} from "react";
import {AuthContext} from "../contexts/auth.context";

const defaultFormFields = {
  email: '',
  password: ''
}

const LoginPage = () => {
  const { login } = useContext(AuthContext)

  const [formFields, setFormFields] = useState(defaultFormFields)

  const handleChange = ({ target: { name, value } }) => setFormFields({...formFields, [name]: value})

  const handleLogin = () => login(formFields)

  return (
    <PageLayout containerWidth="full" padding="none">
      <PageLayout.Content width="full">
        <Box display="grid" gridGap={3}>
          <FormControl>
            <FormControl.Label>Email</FormControl.Label>
            <TextInput type="email" name="email" value={formFields.email} onChange={handleChange} block />
          </FormControl>

          <FormControl>
            <FormControl.Label>Password</FormControl.Label>
            <TextInput type="password" name="password" value={formFields.password} onChange={handleChange} block />
          </FormControl>

          <Button variant="primary" onClick={handleLogin}>
            Log In
          </Button>
        </Box>
      </PageLayout.Content>
      <PageLayout.Footer>

      </PageLayout.Footer>
    </PageLayout>
  )
}

export default LoginPage