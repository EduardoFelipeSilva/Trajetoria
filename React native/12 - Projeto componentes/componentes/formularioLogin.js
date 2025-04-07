import { StatusBar } from 'expo-status-bar';
import { StyleSheet, Text, View, TouchableOpacity} from 'react-native';

export default function formulariologin({ navigation }) {
  return (
    <View style={styles3.container}>
      <View style={styles3.viewLogoeTexto}>
        <View style={styles3.textoView}>
          <Text style={styles3.texto}>Milhões de músicas a sua escolha</Text>
          <Text style={styles3.texto}>Gratis no spotify.</Text>

        </View>
      </View>

      <View style={styles3.containerBotaoLogin}>
        <View style={styles3.botaoInscrevase}>
        <TouchableOpacity onPress={() => navigation.navigate('formulario')}>
                <Text style={styles3.textoBotao}>Inscreva-se Gratis</Text>
          </TouchableOpacity>
        </View>
        <View style={styles3.botaoLogin}>
          <TouchableOpacity onPress={() => navigation.navigate('formulario')}>
                <Text  style={styles3.textoBotao}>Continuar com numero de Telefone</Text>
          </TouchableOpacity>
        </View>
        <View style={styles3.botaoLogin}>
          <TouchableOpacity onPress={() => navigation.navigate('formulario')}>
                <Text  style={styles3.textoBotao}>Continuar  com  a conta do  Google</Text>
          </TouchableOpacity>
        </View>
        <View style={styles3.botaoLogin}>
            <TouchableOpacity onPress={() => navigation.navigate('formulario')}>
                <Text  style={styles3.textoBotao}>Continuar com a conta do facebook</Text>
          </TouchableOpacity>
        </View>
       
        <View style={styles3.botaoLogin}>
            <TouchableOpacity onPress={() => navigation.navigate('formulario')}>
                <Text  style={styles3.textoBotao}>Entrar com Email</Text>
          </TouchableOpacity>
        </View>
       
        
      </View>

    </View>
  );
}

const styles3 = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    backgroundColor: "#F0F8FF"
  },
  viewLogoeTexto: {

    flex: .6,
    justifyContent: 'space-between',
    alignItems: "center"
  },
  logo: {
    width: 70,
    height: 70,
  },
  textoView: {
    flex: .6
  },
  texto: {
    fontSize: 20,
    color: "white",
    width:370,
    textAlign:'center'
  },
  containerBotaoLogin: {
    gap: 10
  },
  botaoInscrevase: {
    backgroundColor: '#87CEFA',
    width: 370,
    height: 50,
    borderRadius: 100,
    alignItems: "center",
    justifyContent: 'center'
  },
  botaoLogin: {
    borderWidth: 1,
    borderColor: "black",
    opacity: .5,
    width: 370,
    height: 50,
    borderRadius: 100,
    alignItems: "center",
    justifyContent: 'center',
    flexDirection:'row',
    gap:20
  },
  textoBotao:{
    color:"black",
    // fontWeight:"600"
  },
  containerForm:{
    gap:20,
    padding:15,
    paddingTop:250,
    backgroundColor: "#00008B",
    flex:1,
    
  },
  input:{
    fontSize:15,
    paddingLeft:15,
    borderWidth:1,
     height:50,
     borderColor:'00008B',
     color:'black',
     borderRadius: 30,
     backgroundColor:'00008B',
     placeholderTextColor: 'black',
  },
  logintexto:{
    fontSize: 50,
    color: "black",
    width:370,
    textAlign:'center',
    marginBottom:85,
  }});