import React, { useState } from "react";
import {
  SafeAreaView,
  StyleSheet,
  TextInput,
  ScrollView,
  View,
  Text,
  Pressable,
  Button,
} from "react-native";

import { useNavigation } from '@react-navigation/native';

const Cadastrar = () => {
  const navigation = useNavigation();
  
  const [nome, setNome] = useState("");
  const [Data, setData] = useState("");
  const [Modulo, setModulo] = useState("");
  const [Curso, setCurso] = useState("");
  const [Periodo, setPeriodo] = useState("");

  const bodyData = {
    nomeAluno: nome,
    Modulo: Modulo,
    idCurso: Curso,
    dtAtraso: Data,
    Periodo: Periodo,
  };

  const cadastrar = async () => {
    try {
      const response = await fetch('http://127.0.0.1:8000/api/atraso', { // Certifique-se de que o endpoint está correto
        method: 'POST',
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(bodyData),
      });

      const responseData = await response.json();
      console.log('Success:', responseData);
      
      // Limpar campos após cadastro
      setNome('');
      setModulo('');
      setCurso('');
      setData('');
      setPeriodo('');

      // Navegar para outra tela após cadastro
      navigation.navigate('Navegacao');

    } catch (error) {
      console.error('Error:', error);
    }
  };

  return (
    <View style={styles.container}>
      <ScrollView>
        <SafeAreaView>
          <View style={styles.centralizarInputs}>

            <Text>Crie sua conta</Text>

            <TextInput
              style={styles.input}
              onChangeText={setNome}
              value={nome}
              placeholder="Nome Completo"
              keyboardType="default"
            />

            <TextInput
              style={styles.input}
              onChangeText={setPeriodo}
              value={Periodo}
              placeholder="Periodo"
              keyboardType="default"
            />

            <TextInput
              style={styles.input}
              onChangeText={setModulo}
              value={Modulo}
              placeholder="Modulo"
              keyboardType="Modulo-address"
            />

            <TextInput
              style={styles.input}
              onChangeText={setCurso}
              value={Curso}
              placeholder="Curso"
              keyboardType="default"
            />

            <TextInput
              style={styles.input}
              onChangeText={setData}
              value={Data}
              placeholder="Data"
              secureTextEntry
            />

            <Text style={styles.aviso}>
              *Ao prosseguir você confiCursoa que leu e aceita os{" "}
              <Pressable onPress={() => {/* Adicione a ação desejada aqui */}}>
                <Text style={styles.teCursoos}>teCursoos de uso</Text>
              </Pressable>.
            </Text>
          </View>

          <View style={styles.fixToText}>
            <Button
              title="Voltar"
              onPress={() => navigation.goBack()} // Navega para a tela anterior
            />
            <Button
              title="Continuar"
              onPress={cadastrar} // Chama a função de cadastro
            />
          </View>
        </SafeAreaView>
      </ScrollView>
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    flexDirection: "column",
    justifyContent: "center",
    alignItems: "center",
    marginTop: '35%',
  },
  input: {
    height: 40,
    margin: 5,
    borderWidth: 1,
    padding: 10,
    width: "100%",
  },
  imagem: {
    width: 130,
    height: 130,
  },
  centralizarInputs: {
    flexDirection: "column",
    justifyContent: "center",
    alignItems: "center",
  },
  aviso: {
    fontSize: 12,
  },
  teCursoos: {
    color: "#50abe4",
    textDecorationLine: "underline",
    fontSize: 12,
  },
  fixToText: {
    flexDirection: 'row',
    justifyContent: 'space-around',
    marginTop: 30,
  },
});

export default Cadastrar;
