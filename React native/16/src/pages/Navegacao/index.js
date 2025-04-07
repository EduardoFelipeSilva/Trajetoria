import React, { useState } from 'react';
import { View, Text, StyleSheet, Pressable, ScrollView } from 'react-native';
import { useNavigation } from '@react-navigation/native';

const Navegacao = () => {
  const navigation = useNavigation();
  const [selectedValue, setSelectedValue] = useState(null);
  const [selectModulo, setSelectModulo] = useState(null);
  const [selectPeriodo, setSelectPeriodo] = useState(null);
  const [nome, setNome] = useState('');
  const [data, setData] = useState('');

  const consul = () => {
    navigation.navigate('Consulta');
  };

  const cadast = () => {
    navigation.navigate('Cadastrar');
  };

  return (
    <ScrollView contentContainerStyle={styles.container}>
      <Text style={styles.header}>Bem-vindo ao Sistema</Text>

      {/* Botões de Navegação */}
      <View style={styles.buttonContainer}>
        <Pressable style={[styles.button, styles.buttonRed]} onPress={consul}>
          <Text style={styles.buttonText}>Consultar</Text>
        </Pressable>
        <Pressable style={[styles.button, styles.buttonBlack]} onPress={cadast}>
          <Text style={styles.buttonText}>Cadastrar</Text>
        </Pressable>
      </View>
    </ScrollView>
  );
};

const styles = StyleSheet.create({
  container: {
    flexGrow: 1,
    justifyContent: 'center',
    alignItems: 'center',
    padding: 20,
    backgroundColor: '#f4f7f6',
  },
  header: {
    fontSize: 36,
    fontWeight: 'bold',
    color: '#1e2a38',
    marginBottom: 30,
    textAlign: 'center', // Centraliza o texto
  },
  buttonContainer: {
    width: '100%',
    marginTop: 20,
    alignItems: 'center', // Centraliza os botões
  },
  button: {
    paddingVertical: 15,
    paddingHorizontal: 25,
    borderRadius: 8,
    alignItems: 'center',
    marginVertical: 10,
    width: '100%', // Garante que os botões ocupem a largura do contêiner
  },
  buttonRed: {
    backgroundColor: '#ff0000', // Cor vermelha
  },
  buttonBlack: {
    backgroundColor: '#000000', // Cor preta
  },
  buttonText: {
    color: '#ffffff',
    fontSize: 18,
    fontWeight: '600',
  },
});

export default Navegacao;
