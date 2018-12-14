import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';

import Grid from 'react-bootstrap/Lib/Grid';
import Row from 'react-bootstrap/Lib/Row';
import Col from 'react-bootstrap/Lib/Col';

import styled from 'styled-components';

class App extends Component {
  render() {
    return (
      <div className="wrapper">
        <SayFullName name="Sveta" surname="Karmanova" link="vk.com" />
        <SayFullName name="Anna" surname="Karmanova" link="#" />
      </div>
    );
  }
}

function SayFullName(props) {
  return (
      <div>
      <h1> Мое имя {props.name}, фамилия {props.surname}</h1>
      <a href={props.link}> Ссылка на мой профиль </a>
      </div>
    )
}

export default App;
