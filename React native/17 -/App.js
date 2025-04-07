import * as React from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import Login from './componentes/Login.js';
import Home from './componentes/Home.js';
import Desenvolvedor from './componentes/Desenvolvedor.js';
import Formulario from './componentes/Formulario.js';
import Albuns from './componentes/Albuns';

<Login/>;

<Formulario/>;


<Home/>;

<Desenvolvedor/>;

<Albuns/>;


const Stack = createNativeStackNavigator();

function App() {
  return (
    <NavigationContainer>
      
      <Stack.Navigator initialRouteName="Entrada">
      <Stack.Screen name="Entrada" component={Login} options={{headerShown:false}}/>

        <Stack.Screen name="formulario" component={Formulario} options={{headerShown:false}} />

        <Stack.Screen name="Home" component={Home} options={{headerShown:false}}/>

        <Stack.Screen name="devs" component={Desenvolvedor} options={{headerShown: false}}/>

        <Stack.Screen name="albuns" component={Albuns} options={{headerShown: false}}/>
        
      </Stack.Navigator>
    </NavigationContainer>
    
  );
}

export default App;