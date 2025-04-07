import { StatusBar } from 'expo-status-bar';
import { StyleSheet, Text, View } from 'react-native';

var nota = 7;
var nota2 = 4;
var nota3 = 1;
var nota4 = 1;

var media = (nota+nota2+nota3+nota4)/4;

resposta = ""
resposta1 = ""

if (media >= 6){
  resposta = "aprovado"
}
else {
  resposta1 ="reprovado"
}


export default function App() {
  return (
    <View style={styles.container}>      
      

      <Text> Sua media é: {media}  </Text>
      <Text style={styles.texto}>{resposta}</Text>
       <Text style={styles.resposta1}> {resposta1}</Text>


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
    fontSize:20,
  },
  texto: {
    color:'blue',
     
  },
  resposta1: {
    color:'red',
  },
});