import * as React from 'react';
import { ScrollView, View, Text, Image, StyleSheet,TouchableOpacity,} from 'react-native';
import albumRoussos from "./img/albumRoussos.jpg";
import alan from './img/alanWalker.jpeg'; 
import dua from './img/dua_lipa.jpg';
import jimmy from './img/jimmy-cliff.jpg'; 
import sia from './img/siaLsd.png'; 
import frank from './img/sinatra.jpg'; 
import tenores from './img/tres-tenores.jpg';
import Triple from './img/TripleS.jpeg';
import twice from './img/twice.png'; 
import baby from './img/babymetal.jpeg'; 
import nirvana from './img/nivarna.jpg'; 
import ram from './img/ram.jpg';    
import ratos from './img/algum.jpg';
import bts from './img/bts.jpg';  
import lana from './img/lana.jpg';    
import taylor from './img/foo.jpg';  
import billie from './img/billie.jpg'; 
import travis from './img/korn.jpg';  
import ret from './img/originais.jpg';  
import HHr from './img/racionais.jpg';  
import orochi from './img/saboton.jpg';
import toddy from './img/taylor.jpg';  
import daleste from './img/metallica.jpg';  
import kevin from './img/neffex.png';



export default function HomeScreen({ navigation }) {
    return (
      <ScrollView>
        
      <View style={styles2.container}>
  {/* COLUNA1 */}
      <View style={styles2.coluna1}>
      <View style={styles2.containerBoaTarde}>
            <View style={styles2.containerTextoBoaTarde}>
  
              <TouchableOpacity  onPress={() => navigation.navigate('Details')}>
              <Image style={styles2.avatar} source={albumRoussos}/>
              </TouchableOpacity>
            </View>
            <View style={styles2.containerTextoMusica}>
              <TouchableOpacity  onPress={() => navigation.navigate('Details')}>
                <Text style={styles2.textoMusica}>Musica</Text>
              </TouchableOpacity>
            </View>
            
            <View style={styles2.continerTextoPodcasts}>
              <TouchableOpacity onPress={() => navigation.navigate('Details')}>
                <Text style={styles2.textoPodcasts}>Podcasts</Text>
              </TouchableOpacity>
            </View>
  
            <View style={styles2.continerTextoPodcasts}>
              <TouchableOpacity onPress={() => navigation.navigate('devs')}>
                <Text style={styles2.textoPodcasts}>Devs</Text>
              </TouchableOpacity>
            </View>
          </View>
      </View>
      {/* COLUNA2 */}
      <View style={styles2.coluna2}>
          <View style={styles2.linha1}>
            <TouchableOpacity style={styles2.Containermusica1} onPress={() => navigation.navigate('albuns')}>
            <Image style={styles2.image} source={toddy}/>
             <Text style={styles2.textoColuna2}>Taylor</Text>
              </TouchableOpacity>
  
              <TouchableOpacity style={styles2.Containermusica2} onPress={() => navigation.navigate('Details')}>
              <Image style={styles2.image} source={dua}/>
               <Text style={styles2.textoColuna2}>Dua lipa</Text>
              </TouchableOpacity>
          </View>
          <View style={styles2.linha2}>
          <TouchableOpacity style={styles2.Containermusica1} onPress={() => navigation.navigate('Details')}>
          <Image style={styles2.image} source={jimmy}/> 
             <Text style={styles2.textoColuna2}>Jimmy Cliff</Text>
              </TouchableOpacity>
              <TouchableOpacity style={styles2.Containermusica2} onPress={() => navigation.navigate('Details')}>
              <Image style={styles2.image} source={sia}/>  
                <Text style={styles2.textoColuna2}>Sia</Text>
              </TouchableOpacity>
          </View>
          <View style={styles2.linha3}>
          <TouchableOpacity style={styles2.Containermusica1} onPress={() => navigation.navigate('Details')}>
          <Image style={styles2.image} source={frank}/>  
           <Text style={styles2.textoColuna2}>Frank Sinatra</Text>
              </TouchableOpacity>
              <TouchableOpacity style={styles2.Containermusica2} onPress={() => navigation.navigate('Details')}>
              <Image style={styles2.image} source={tenores}/>  
                 <Text style={styles2.textoColuna2}>Tres Tenores</Text>
              </TouchableOpacity>
          </View>
          <View style={styles2.linha3}>
          <TouchableOpacity style={styles2.Containermusica1} onPress={() => navigation.navigate('Details')}>
          <Image style={styles2.image} source={Triple}/> 
            <Text style={styles2.textoColuna2}>TripleS</Text>
              </TouchableOpacity>
              <TouchableOpacity style={styles2.Containermusica2} onPress={() => navigation.navigate('Details')}>
              <Image style={styles2.image} source={twice}/>  
                 <Text style={styles2.textoColuna2}>Twice</Text>
              </TouchableOpacity>
          </View>
          </View>
  {/* COLUNA3 */}
  <View style={styles2.coluna3}>
  
  <TouchableOpacity style={styles2.ContainerTextoSeusMixesMaisOuvidos} onPress={() => navigation.navigate('Details')}>
        <Text style={styles2.TextoSeusMixesMaisOuvidos}>Seus mixes mais ouvidos</Text>
      </TouchableOpacity>
      </View>
  <ScrollView horizontal={true} style={styles2.scrollView}>
          <View style={{   flexDirection: 'row',}}>
            <TouchableOpacity onPress={() => navigation.navigate('Details')}>
              <Image source={baby} style={styles2.images} />
            </TouchableOpacity>
            
            <TouchableOpacity onPress={() => navigation.navigate('Details')}>
              <Image source={nirvana} style={styles2.images} />
            </TouchableOpacity>
            
            <TouchableOpacity onPress={() => navigation.navigate('Details')}>
              <Image source={ram} style={styles2.images} />
            </TouchableOpacity>
            
            <TouchableOpacity onPress={() => navigation.navigate('Details')}>
              <Image source={ratos} style={styles2.images} />
            </TouchableOpacity>
            
            <TouchableOpacity onPress={() => navigation.navigate('Details')}>
              <Image source={bts} style={styles2.images} />
            </TouchableOpacity>
              </View>
          </ScrollView>
  
  
  
  
  
  
        <View style={styles2.coluna3}>
          <TouchableOpacity style={styles2.ContainerTextoSeusMixesMaisOuvidos} onPress={() => navigation.navigate('Details')}>
                <Text style={styles2.TextoSeusMixesMaisOuvidos}>Estações recomendadas</Text>
              </TouchableOpacity>
        </View>
        <ScrollView horizontal={true} style={styles2.scrollView}>
          <View style={{   flexDirection: 'row',}}>
            <TouchableOpacity onPress={() => navigation.navigate('Details')}>
              <Image source={lana} style={styles2.images} />
            </TouchableOpacity>
            
            <TouchableOpacity onPress={() => navigation.navigate('Details')}>
              <Image source={taylor} style={styles2.images} />
            </TouchableOpacity>
            
            <TouchableOpacity onPress={() => navigation.navigate('Details')}>
              <Image source={billie} style={styles2.images} />
            </TouchableOpacity>
            
            <TouchableOpacity onPress={() => navigation.navigate('Details')}>
              <Image source={alan} style={styles2.images} />
            </TouchableOpacity>
            
            <TouchableOpacity onPress={() => navigation.navigate('Details')}>
              <Image source={travis} style={styles2.images} />
            </TouchableOpacity>
              </View>
          </ScrollView>
        <View style={styles2.coluna3}>
          <TouchableOpacity style={styles2.ContainerTextoSeusMixesMaisOuvidos} onPress={() => navigation.navigate('Details')}>
                <Text style={styles2.TextoSeusMixesMaisOuvidos}>Tocadas Recentemente</Text>
              </TouchableOpacity>
        </View>
        <ScrollView horizontal={true} style={styles2.scrollView}>
          <View style={{   flexDirection: 'row',}}>
            <TouchableOpacity onPress={() => navigation.navigate('Details')}>
              <Image source={ret} style={styles2.images} />
            </TouchableOpacity>
            
            <TouchableOpacity onPress={() => navigation.navigate('Details')}>
              <Image source={HHr} style={styles2.images} />
            </TouchableOpacity>
            
            <TouchableOpacity onPress={() => navigation.navigate('Details')}>
              <Image source={orochi} style={styles2.images} />
            </TouchableOpacity>
            
            <TouchableOpacity onPress={() => navigation.navigate('Details')}>
              <Image source={daleste} style={styles2.images} />
            </TouchableOpacity>
            
            <TouchableOpacity onPress={() => navigation.navigate('Details')}>
              <Image source={kevin} style={styles2.images} />
            </TouchableOpacity>
  
          
              </View>
             
             
          </ScrollView>
      </View>
      
      </ScrollView>
    );
  }

  const styles2 = StyleSheet.create({
    container: {
      flex: 1,
      flexDirection:"column",
      backgroundColor: '#000',
      alignItems: 'center',
      justifyContent: 'flex-start',
      width:"100%",
    },
    scrollView: {
      flex: 1,
      flexDirection: 'row',
      backgroundColor: '#000',
      width:'100%'
    },
    coluna1 : {
      width:"100%",
      height: "50px",
      flexDirection:'row',
      alignItems:'center',
      textAlign:'center',
      justifyContent:'center',
      marginTop:60,
      marginBottom:10
    },
    containerBoaTarde: {
      flexDirection:'row',
      width:"95%",
      height:"80%",
      gap:5,
      
  
      textAlign:'justify',
      alignItems:'center',
    },
    containerTextoBoaTarde: {
      borderRadius:20,
      textAlign:'center',
      justifyContent:'center',
      alignItems:'center',
      width:"30px",
  
    },
    textoBoaTarde: {
      color:"#000",
      fontWeight:"bold",
          marginLeft:50
  
    },
    containerTextoMusica: {
      backgroundColor:"#2f2e2e",
      textAlign:'center',
      alignItems:'center',
      borderRadius:10,
      width:"20%",
      height:"23px",
    },
    textoMusica: {
      color:"#fff",
  
    },
    continerTextoPodcasts: {
      backgroundColor:"#2f2e2e",
      textAlign:'center',
      alignItems:'center',
      borderRadius:10,
      width:"23%",
      height:"23px",
      
    },
    textoPodcasts: {
      color:"#fff",
  
  
    },
  //COLUNA 2
    coluna2: {
      flexDirection:'column',
      width:"100%",
      // backgroundColor: '#f00',
      marginTop:'1rem',
      gap:8
      
    },
    textoColuna2 : {
      color:"#fff",
      position:'absolute',
      marginLeft:100,
      marginTop:30
     
  
  
    },
    linha1: {
      height: "50px",
      flexDirection:'row',
      gap:8,
      // backgroundColor: '#f00',
      // Alinhamento dos objetos da linha
      alignItems:'center',
      justifyContent:'center',
    },
    Containermusica1: {
      backgroundColor:"#2f2e2e",
      height:"100%",
      width:"46%",
      borderRadius:4,
    },
    Containermusica2: {
      backgroundColor:"#2f2e2e",
      height:"100%",
      width:"46%",
      borderRadius:4,
      gap:10
    },
    linha2: {
      height: "50px",
      flexDirection:'row',
      gap:8,
      // backgroundColor: '#f00',
      // Alinhamento dos objetos da linha
      alignItems:'center',
      justifyContent:'center',
      marginTop:"5px",
    },
    linha3 :{
      height: "50px",
      flexDirection:'row',
      gap:8,
  
      // backgroundColor: '#f00',
      // Alinhamento dos objetos da linha
      alignItems:'center',
      justifyContent:'center',
      marginTop:"5px",
    },
    /*COLUNA 3---------------------*/
    coluna3: {
      width:"100%",
      marginTop:"1rem",
      justifyContent:'center',
      alignItems:'center',
    },
    ContainerTextoSeusMixesMaisOuvidos: {
      // backgroundColor:'red',
      textAlign:'justify',
      width:"94%",
      marginTop:17
  
    },
    TextoSeusMixesMaisOuvidos : {
      color:"#fff",
      fontWeight:'bold',
      fontSize:23,
  
      marginBottom:"1rem",
    },
    image: {    
      width: 80,
      height: 80,
    },
    imageContainer: {
      flexDirection: 'row',
  
    },
    images: {
      width: 150, 
      height: 150, 
      margin: 10, 
      borderRadius: 2,
    },
    avatar: {    
      width: 30,
      height: 30,
      borderRadius:20,
    }
  });