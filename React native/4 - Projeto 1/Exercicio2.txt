import { StatusBar } from 'expo-status-bar';
import { StyleSheet, Text, View } from 'react-native';

var idade = 59;

resposta = ""


if (idade <= 18){
  resposta = "209,00"
}
else if (idade <= 23)  {
  resposta ="289,00"
}
else if (idade <= 28)  {
  resposta ="289,00"
}
else if (idade <= 33)  {
  resposta ="289,00"
}
else if (idade <= 38)  {
  resposta =" 289,00"
}
else if (idade <= 43)  {
  resposta ="289,00"
}
else if (idade <= 48)  {
  resposta ="462,00"
}
else if (idade <= 53)  {
  resposta ="462,00"
}
else if (idade <= 59)  {
  resposta ="462,00"
}
else {
  resposta ="845,00"
}


export default function App() {
  return (
    <View style={styles.container}>      
      

      <Text style={styles.texto}> Seu plano custará: {resposta}  </Text>


      <StatusBar style="auto" />
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
  texto: {
    fontSize:20,
     
  },
});