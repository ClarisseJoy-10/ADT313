import logo from './logo.svg';
import './App.css';
import { createBrowserRouter, RouterProvider } from 'react-router-dom';
import Main from './pages/Main/Main';
import Form from './pages/Main/Movie/Form/Form';
import MovieContextProvider from './context/MovieContext';
import Form from './pages/Main/Movie/List/List';
import Login from './pages/Public/Login/Login';
import Register from './pages/Public/Register/Register';

const router = createBrowserRouter([
  {
    path: '/login',
    element: <Login />,
  },
  {
  path: '/register',
  element: <Register />,
},
{
    path: '/',
    element: <Main />,
    children: [
      {
        path: '/form',
        element: <Form />,
      },
      {
        path: '/view/:movieId?',
        element: <View />,
      },
    ],
  },
]);

function App() {
  return (
    <div className='App'>
      <MovieContextProvider>
        <RouterProvider router={router} />
      </MovieContextProvider>
    </div>
  );
}

export default App;
