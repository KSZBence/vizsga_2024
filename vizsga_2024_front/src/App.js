import logo from './logo.svg';
import './App.css';
import InputForm from './components/form';
import Tabla from './components/tabla';
import 'bootstrap/dist/css/bootstrap.min.css';
import DataService from './components/DataService';
import { useState } from 'react';



function App() {
  const DS = new DataService();
  const [bellit, setBeallit] = useState([]);

  function setLista(response) {
    setBeallit(response)
  }
  DS.getData("http://localhost:8000/api/bejegyzesek")
  return (
    <div className="App">
      <head>
        <title>Zold Fold</title>
      </head>
      <InputForm> </InputForm>
      <Tabla></Tabla>
      {console.log(bellit)}
    </div>
  );
}

export default App;
