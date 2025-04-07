import * as React from 'react';
import { ScrollView, View, Text, Image, StyleSheet,TouchableOpacity,TextInput, FlatList } from 'react-native';
import billie from './img/billie.jpg'; 
import globo from './img/globo.png';     
import adicionar from './img/adicionar.png';
import tres from './img/tresPontos.png';        
import aleatorio from './img/aleatorio.png';     
import play from './img/play.png';    
import dowload from './img/download.png';

const Musicas  = [
    {
      id:'1',
      imagem:<Image source={billie} style={{ width: 55, height: 55 }} />,
      titulo:"Deus ",
      cantor:'Mc Ryan,Mc Kevin',
    },
    {
      id:"2",
      imagem:<Image source={billie} style={{ width: 55, height: 55 }} />,
      titulo:'Tralha Rico',
      cantor:'Menó tody'
    },
    {
      id:"3",
      imagem:<Image source={billie} style={{ width: 55, height: 55 }} />,
      titulo:'Vida Longa',
      cantor:'Mc Kevin'
    },
    {
      id:"4",
      imagem:<Image source={billie} style={{ width: 55, height: 55 }} />,
      titulo:'Opção',
      cantor:'Mc Kevin,Mc PH'
    },
    {
      id:"5",
      imagem:<Image source={billie} style={{ width: 55, height: 55 }} />,
      titulo:'Celebridade',
      cantor:'Meno Tody,Mestre B'
    },
    {
      id:"6",
      imagem:<Image source={billie} style={{ width: 55, height: 55 }} />,
      titulo:'Cicatrizes',
      cantor:'Meno Tody,Mestre B'
    },
    {
      id:"7",
      imagem:<Image source={billie} style={{ width: 55, height: 55 }} />,
      titulo:'Xt',
      cantor:'Mc Hariel'
    },
    {
      id:"8",
      imagem:<Image source={billie} style={{ width: 55, height: 55 }} />,
      titulo:'Malokeiro Sorridente',
      cantor:'Mc Kevin,Perera DJ'
    },
    {
      id:"9",
      imagem:<Image source={billie} style={{ width: 55, height: 55 }} />,
      titulo:'X6',
      cantor:'Mc Hariel'
    },
  ]
  const ItemMusic = ({ imagem, titulo, cantor }) => {
    return (
      <View >
  
  
        <View style={{ flexDirection: 'row'}}>
        <TouchableOpacity onPress={() => navigation.navigate('formulario')}>
     
          <View style={{flexDirection:"row",justifyContent:"center",alignItems:"center"}}>
          <Text style={{width:50,height:70}}>{imagem}</Text>
            <View style={{justifyContent:"center",height:70,justifyContent:"flex-end"}}>
              <Text style={{ color: 'white',paddingLeft:10,fontWeight:600,}}>{titulo}</Text>
              <Text  style={{ color: 'gray',paddingLeft:10}}>
                {cantor}
              </Text>
            </View>
            <Image
                      source={tres}
                      style={{width:15,height:15}}
                              />
          </View>
          </TouchableOpacity>
  
        </View>
  
  
      </View>
    );      
  
  };
  
  export default function albuns({ navigation }) {
  
    
    const [pesquisa, setPequisa] = React.useState('');
    return (
      <ScrollView>
        <View style={styles.containerFaixa}>
            <View style={{flexDirection:'row',padding:30,justifyContent:'center',gap:15}}>
            <TextInput
              placeholder='Procurar nesta playlist'
              keyboardType={'default'}
        
              style={styles.inputPlaylist}
              placeholderTextColor={"white"}
            />
            <TouchableOpacity style={{borderWidth:1,borderColor:"white",alignItems:"center",justifyContent:"center",width:140, borderRadius:5}} >
              <Text style={{color:"white"}}>
                Classificar
              </Text>
            </TouchableOpacity>
            </View>
            <View style={{justifyContent:'center',alignItems:"center"}}>
              <Image
                  source={billie}
                  style={styles.imagePlaylist}
              />
                  </View>
              <View style={{padding:18}}>
              <Text style={{color:"white",fontSize:28,fontWeight:'600'}}>
                  HIT ME HARD AND SOFT
                </Text>
                <View style={{alignItems:"flex-start"}} >
                <View style={{flexDirection:'row',gap:5,justifyContent:"center",alignItems:'center',marginTop:8}}>
                  <Image
                    source={billie}
                    style={{width:25,height:25,borderRadius:20}}
                            />
                   <Text style={{color:"white"}}>
                          Billie Eilish
                  </Text>
                </View>
                <View style={{flexDirection:'row',gap:5,justifyContent:"center",alignItems:'center',marginTop:8}}>
                  <Image
                    source={globo}
                    style={{width:25,height:25,borderRadius:20}}
                            />
                 <Text style={{color:"white",fontSize:10,color:"gray"}}>
                  1 curtida. 3h 55minutos
                  </Text>
                </View>
                <View style={{flexDirection:'row',gap:5,justifyContent:"center",alignItems:'center',marginTop:8,justifyContent:'space-between',width:400}}>
                  <View style={{flexDirection:'row',gap:10}}>
                    <Image
                      source={dowload}
                      style={{width:32,height:32}}
                              />
                    <Image
                      source={adicionar}
                      style={{width:32,height:32}}
                              />
  
                    <Image
                      source={tres}
                      style={{width:25,height:25}}
                              />
                  </View>
                  <View style={{flexDirection:"row",gap:10,alignItems:"center"}}>
                    <Image
                        source={aleatorio}
                        style={{width:32,height:32}}
                      />
                    <Image
                        source={play}
                        style={{width:46,height:46}}
                      />
                  </View>
                </View>
        
                </View>
                <FlatList
                  data={Musicas}
                    renderItem={({ item }) => <ItemMusic imagem={item.imagem} titulo={item.titulo} cantor={item.cantor} />}
                      keyExtractor={item => item.id}
                  />
        
        
              </View>
        
        
        </View>
      </ScrollView>
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
  
