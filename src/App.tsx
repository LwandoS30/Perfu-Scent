import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import { Text } from './components/Text/Text';
import { Navbar } from './components/Navbar/Navbar';
import { Search } from './components/Search/Search';
import { Footer } from './components/Footer/Footer'; 

import Arya from "./assets/images/40/Arya.jpg"
import BEdition from './assets/images/40/BEditionMan.jpg'
import BerryBerry from './assets/images/40/BerryBerry.jpg'
import BlackOud from './assets/images/40/BlackOud.jpg'
import ClubDeAbsolu from './assets/images/40/ClubDeAbsolu.jpg'
import D from './assets/images/40/D.jpg'
import DezireBlue from './assets/images/40/DezireBlue.jpg'
import { ItemCard } from './components/ItemCard/ItemCard';
import { ContentContainer } from './components/componentContainer';

function App() {
  const [count, setCount] = useState(0)
  const [stock, setStock] = useState([
    { name: "Arya", imgLink: Arya, description: "Arya", price: 80, id: 1 },
    { name: "BEditionMan", imgLink: BEdition, description: "B-EditionMan ", price: 80, id: 2 },
    { name: "BerryBerry", imgLink: BerryBerry, description: "Berry & Berry", price: 80, id: 3 },
    { name: "BlackOud", imgLink: BlackOud, description: "Black Oud", price: 80, id: 4 },
    { name: "ClubDeAbsolu", imgLink: ClubDeAbsolu, description: "Club De Absolu", price: 80, id: 5 },
    { name: "D", imgLink: D, description: "D", price: 80, id: 6 },
    { name: "DezireBlue", imgLink: DezireBlue, description: "Dezire Blue", price: 80, id: 7 }
  ])

  return (
    <>
    <div id='app-container'>
      <div id='scrollable'>
            <Navbar />
            <Search />
            <ContentContainer>
              {
                stock && stock.length > 0 && stock.map(product => {
                    return <ItemCard
                      name={product.name}
                      description={product.description}
                      price={product.price}
                      imgLink={product.imgLink}
                    />
                })
              }
            </ContentContainer>
        
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
