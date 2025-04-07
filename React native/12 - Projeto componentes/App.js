import { StyleSheet, Text, View } from 'react-native';
import { NavigationContainer } from '@react-navigation/native';
import * as React from 'react';
import { createNativeStackNavigator } from '@react-navigation/native-stack';

import Topo from './componentes/topo'; 


const Stack = createNativeStackNavigator();

function App() {
  return (
    <NavigationContainer>
      
      <Stack.Navigator initialRouteName="Entrada">

        
      </Stack.Navigator>
    </NavigationContainer>
    
  );
}

export default function App() {
  return (
    <View style={styles.container}>
      
        <Topo/>
        

    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'center',
  },
});
