import { StyleSheet, Text, View } from 'react-native';

export default function App() {
  return (
    <View style={styles.centro}>

      <View style={styles.centro}>
      <text style={styles.textotitulo}>Android </text>
      </View>

      
      <text style={styles.texto}>O Android é um sistema operacional móvel desenvolvido pela Google.
     
       Ele foi inicialmente lançado em setembro de 2008 e desde então se tornou o sistema operacional mais usado no mundo em dispositivos móveis, como smartphones e tablets.  </text>
      

      <View style={styles.centro}>
      <text style={styles.textotitulo}>Switch </text>
      </View>
      
      
      <text style={styles.texto}>O switch é uma aparelho que irá conectar todos os computadores da sua rede, de forma que eles possam trocar dados entre si.
       O switch recebe os dados do computador de origem e redireciona para o computador de destino, seja ele um servidor ou um desktop normal, de um outro colaborador que está conectado na mesma rede.</text>
      
    

      <View style={styles.centro}>
      <text style={styles.textotitulo}>Cokdova </text>
      </View>

    
      <text style={styles.texto}>Apache Cordova (anteriormente PhoneGap) é uma estrutura de desenvolvimento de aplicativo móvel criada pela Nitobi.
       A Adobe Systems comprou a Nitobi em 2011, rebatizou-a como PhoneGap e, posteriormente, lançou uma versão de código aberto do software chamada Apache Cordova.</text>
      </View>
    
    
  );
}

const styles = StyleSheet.create({
  centro: {
    flex: 1,
    alignItems: 'center',
    justifyContent: 'center',
    backgroundColor: '#87CEEB',
    borderWidth:1,
    borderColor:'black',
  },
  
  textotitulo: {
    color:'black',
    fontWeight:'500',
    fontSize:35,
    borderWidth:3,
    borderColor:'black',
  },
   texto: {
    flex:1,
    alignItems:'center',
    color:'black',
    fontSize:25,
    paddingLeft:50,
   }
});
