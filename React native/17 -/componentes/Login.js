import * as React from 'react';
import {View, Text, Image, StyleSheet,TouchableOpacity} from 'react-native';
import logo from './img/logo.png';
import telefone from './img/icon-telefone.png';
import google from './img/icon-google.png';
import facebook from './img/icon-facebook.png';
    

export default function LoginScreen({ navigation }) {
    return (
      <View style={styles3.container}>
        <View style={styles3.viewLogoeTexto}>
          <Image
            style={styles3.logo}
            source={logo}
          />
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
            <Image
              source={telefone}
            />
            <TouchableOpacity onPress={() => navigation.navigate('formulario')}>
                  <Text  style={styles3.textoBotao}>Continuar com numero de Telefone</Text>
            </TouchableOpacity>
          </View>
          <View style={styles3.botaoLogin}>
            <Image
              source={google}
            />
            <TouchableOpacity onPress={() => navigation.navigate('formulario')}>
                  <Text  style={styles3.textoBotao}>Continuar  com  a conta do  Google</Text>
            </TouchableOpacity>
          </View>
          <View style={styles3.botaoLogin}>
            <Image
              source={facebook}
            />
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
      backgroundColor: "#363636",
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
    logoform: {
      marginBottom:100,
  
    },
    textoForm: {
      fontSize:40,
      color:'white',
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
      backgroundColor: '#1DD05D',
      width: 370,
      height: 50,
      borderRadius: 100,
      alignItems: "center",
      justifyContent: 'center'
    },
    botaoLogin: {
      borderWidth: 1,
      borderColor: "white",
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
      color:"white",
      // fontWeight:"600"
    },
    containerForm:{
      gap:20,
      padding:15,
      paddingTop:250,
      backgroundColor: "#363636",
      flex:1,
      
    },
    input:{
      fontSize:15,
      paddingLeft:15,
      borderWidth:1,
       height:50,
       borderColor:'white',
       color:'black',
       borderRadius: 30,
       backgroundColor:'white'
    },
  });