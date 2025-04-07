import * as React from 'react';
import {View, Text, Image, StyleSheet,TouchableOpacity,FlatList } from 'react-native';
import spotify from './img/spotify-logo.png'
import instagram from './img/instagram-logo.png';
import linkedin from './img/linkedin-logo.png'; 
import vitor from './img/perfilVitor.jpeg';
import eduardo from './img/perfilEduardo.jpeg';  
import fernanda from './img/perfilFernanda.jpeg';  
import andre from './img/perfilAndre.jpg';

export default function DeveloperScreen({ navigation }){
    const Item = ({cargo, nome, rede, rede1, foto}) => (
        <View style={styles.linha2}>
            <View>
            <Text >{foto}</Text>
            </View>
      
      
          <View style={styles.colunaContato}>
            <View style={styles.boxTxt}>
            <Text style={styles.nomeContato}>{nome}</Text>
            <Text style={styles.cargoTxt}>{cargo}</Text>
            </View>
      
            <View style={styles.colunaPerfil}>
      
      
              
              <Image style={styles.logoImg} source={linkedin}></Image>
              <Text style={styles.nomePerfil}>{rede}</Text>
      
            
              <Image style={styles.logoImg} source={instagram}></Image>
              <Text style={styles.nomePerfil}>{rede1}</Text>
            </View>
          
            </View>
            </View>
      
      );

      const DATA = [
        {
          id: '3ac68afc-c605-48d3-a4f8-fbd91aa97f63',
          nome:'André Menezes',
          cargo:'Dev. Front-end',
          rede:'André Menezes',
          rede1:'@André_Menezes',
          foto:<Image style={{width: 85,height: 85, borderRadius: 50,}} source={andre} />,
        },
        {
          id: '58694a0f-3da1-471f-bd96-145571e29d72',
          nome:'Eduardo Felipe',
          cargo:'Dev. Front-end',
          rede:'Eduardo Felipe',
          rede1:'@EduardoFelipe',
          foto:<Image style={{width: 85,height: 85, borderRadius: 50,}} source={eduardo} />,
        },
        {
          id: '3ac68afc-c605-48d3-a4f8-fbdaa97f63',
          nome:'Fernanda Luiza',
          cargo:'Dev. Front-end',
          rede:'Fernanda Luiza',
          rede1:'@Fernanda_Luiza',
          foto:<Image style={{width: 85,height: 85, borderRadius: 50,}} source={fernanda} />,
        },
        {
          id: '58694a0f-3da1-471f-bd96-1451e29d72',
          nome:'Vitor Augusto',
          cargo:'Dev. Front-end',
          rede:'Vitor Augusto',
          rede1:'@vitor_Augusto',
          foto:<Image style={{width: 85,height: 85, borderRadius: 50,}} source={vitor} />,
      
        },
      ];
    return (
  
          <View style={styles.container}>
          <View style={styles.linhaCabecalho}>
              
              <View style={styles.coluna}>
                <Text style={styles.tituloDev}>Desenvolvedores</Text>
                <View style={styles.colunaImg}></View>
               
  
                <TouchableOpacity onPress={() => navigation.navigate('Home')}>
                <View style={styles.colunaImg}> 
                <Image style={styles.imageSpotify} source={spotify} />
                <Text style={styles.tituloSpotify}>Spotify</Text>
                </View> 
            </TouchableOpacity>
               </View> 
  
             
    
            </View>
      <FlatList
        data={DATA}
  
        renderItem={({item}) => <Item cargo={item.cargo} nome={item.nome} rede={item.rede}  rede1={item.rede1} foto={item.foto} />}
        keyExtractor={item => item.id}
      />
  
            
  
  
    
                
          
  
            
      
  
            <TouchableOpacity style={styles.btn}  onPress={() => navigation.push('Home')}>
               <Text style={styles.btnTxt}>Voltar</Text>
          </TouchableOpacity>
  
          
          </View>
  
    );
  }


  
  
  const styles = StyleSheet.create({
    container: {
      flex: 1,
      flexDirection: "column",
      backgroundColor: "#121212", 
      justifyContent: 'center'
    },
  
    coluna: {
      width: 100,
      height: 50,
      marginBottom: 10,
      flex: 1,
      alignItems: "center",
      justifyContent: "space-around",
      flexDirection: 'row'
    },
    linha2: {
      flex: 1,
      height: 100,
      flexDirection: "row",
      margin: 12
    },
    
    linhaCabecalho: {
      flex: 1,
      height: 100,
      flexDirection: "row",
      alignItems: "center",
      justifyContent: "center",
      backgroundColor: "#121212",
   
    },
  
    tituloSpotify: {
      color: "#1DB954",
      fontSize: 25,
      fontWeight: 'bold',
      textAlign: "justify",
      padding:'10px'
    },
    tituloDev: {
      color: "white",
      fontSize: 25,
      // fontWeight: 600,
      textAlign: "justify",
    },
    colunaImg: {
     flexDirection: 'row',
     alignItems: 'center',
     
    },
    nomeContato: {
      fontSize: 14,
      color: "white",
      // fontWeight: "bold",
      textAlign: "center",
  
    },
    mensagemContato: {
      color: "white",
      fontSize: 15,
      // fontWeight: 600,
      textAlign: "justify",
      paddingTop: 5,
    },
    colunaContato: {
      width: 220,
      marginLeft: 5,
      flex: 1,
      alignItems: "flex-start",
      justifyContent: "center",
      padding: 10,
      marginBottom: '30px'
    },
    
  
    
  
    imageSpotify: {
     width: 35,
     height: 35
    
    },
    colunaPerfil:{
      flex: 1,
      flexDirection: 'row',
      alignItems: 'center',
      marginTop: '2px'
    },
   
    cargoTxt:{
      color:'white',
      fontStyle: 'italic',
      
    },
    nomePerfil: {
      color: 'white', 
      textAlign: 'center',
      fontSize: 13
    },
    boxTxt:{
      marginBottom: '15px',
     alignItems: 'center'
    },
    btn: {
      width: '85px',
      height: '50px',
      backgroundColor: '#1db954',
      alignItems: 'center',
      justifyContent: 'center',
      margin: 'auto',
      borderRadius: 20
    },
    btnTxt:{
      color: 'white',
      // fontWeight: 'bold'
    },
      //tela de login e formulario
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
        backgroundColor: '#1DD05D',
        width: 370,
        height: 50,
        borderRadius: 100,
        alignItems: "center",
        justifyContent: 'center'
      },
      botaoLogin: {
        borderWidth: 1,
        borderColor: "gray",
     
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
        // fontWeight:"600", 
      },
      imagePlaylist:{
        width:260,
        height:260
      },
      containerFaixa:{
        backgroundColor: '#000',
      },
      inputPlaylist:{
        fontSize:15,
        paddingLeft:15,
        borderWidth:1,
        heigth:35,
        borderColor:'white',
        color:'white',
        width:250,
        backgroundColor:'transparent',
        borderRaDIUS:5,
      }
  
  
  });
  
