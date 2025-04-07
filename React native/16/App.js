import React from 'react';

import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';


import Cadastrar from './src/pages/cadastrar';
import Consulta from './src/pages/Consulta';
import Navegacao from './src/pages/Navegacao';
const Stack = createNativeStackNavigator();
const App = () => {
  return (
    <NavigationContainer>
    <Stack.Navigator initialRouteName="Navegacao">
    
      <Stack.Screen  name='Cadastrar' component={Cadastrar}/>
      <Stack.Screen  name='Consulta' component={Consulta}/>
      <Stack.Screen  name='Navegacao' component={Navegacao}/>
    </Stack.Navigator>
  </NavigationContainer>
  );
};



export default App;