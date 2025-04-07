import React, { useEffect, useState } from 'react';
import { View, Text, StyleSheet, FlatList } from 'react-native';

const Consulta = () => {
  const [resposta, setResposta] = useState([]);

  useEffect(() => {
    async function consult() {
      try {
        const response = await fetch('http://127.0.0.1:8000/api/atraso');
        const data = await response.json();
        console.log(data); // Verificar os dados recebidos
        setResposta(data);
      } catch (error) {
        console.log(error); 
      }
    }
    consult();
  }, []); 
  

  const renderItem = ({ item }) => (
    <View style={styles.row}>
       <Text style={styles.cell}>{item.nomeAluno}</Text>  
      <Text style={styles.cell}>{item.Modulo}</Text>     
      <Text style={styles.cell}>{item.Periodo}</Text>  
      <Text style={styles.cell}>{item.Curso}</Text>      
      <Text style={styles.cell}>{item.dtAtraso}</Text>      
      
    </View>
  );

  return (
    <View style={styles.container}>
      <View style={styles.header}>
      <Text style={styles.headerCell}>Nome</Text>
        <Text style={styles.headerCell}>Módulo</Text>
        <Text style={styles.headerCell}>Periodo</Text>
        <Text style={styles.headerCell}>Curso</Text>
        <Text style={styles.headerCell}>Data do Atraso</Text>

      </View>
      
      <FlatList
        data={resposta}
        renderItem={renderItem}
        keyExtractor={(item) => (item.idAtraso)} 
        style={styles.list}
      />
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    padding: 20,
    backgroundColor: '#f0f4f8',
  },
  header: {
    flexDirection: 'row',
    backgroundColor: '#007BFF',
    paddingVertical: 10,
    paddingHorizontal: 5,
    borderRadius: 5,
    marginBottom: 10,
  },
  headerCell: {
    flex: 1,
    color: '#ffff',
    fontWeight: 'bold',
    textAlign: 'center',
  },
  row: {
    flexDirection: 'row',
    paddingVertical: 10,
    paddingHorizontal: 5,
    borderBottomWidth: 1,
    borderBottomColor: '#ccc',
  },
  cell: {
    flex: 1,
    textAlign: 'center',
    fontSize: 16,
    color: '#333',
  },
  list: {
    marginTop: 10,
  },
});

export default Consulta;