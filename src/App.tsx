import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import { Text } from './components/Text/Text';
import { Navbar } from './components/Navbar/Navbar';
import { Search } from './components/Search/Search';
import { Footer } from './components/Footer/Footer';  

function App() {
  const [count, setCount] = useState(0)

  return (
    <>
    <div id='app-container'>
      <div id='scrollable'>
            <Navbar />
            <Search />
            <Text variant={'h1'}>Hello there world</Text>
            <Text variant={'h2'}>My name is Lwando Sodinga</Text>
            <Text variant={'p'}>I am revisiting React.tsx practise</Text>
            <Text variant={'span'}>I am hoping to create something special for my first personla project, which
              is my perfume website.
            </Text>
      </div>
      <Footer/>
    </div>

    </>
  )
}

export default App
