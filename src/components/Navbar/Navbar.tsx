import React from 'react';
import { Text } from '../Text/Text';
import styles from './Navbar.module.css';
import { ContentContainer } from '../componentContainer';

export const Navbar = () => {

    return(
        <nav>
            <ContentContainer className={styles.content}>
                <Text variant={'h2'} style={{margin: 0 }}>Perfu-Scent</Text>
                <div className='links'>
                    <a href='#/' className={styles.link}>Home</a>
                    <a href='#/' className={styles.link}>About</a>
                    <a href='#/' className={styles.link}>Contact</a>
                    <a href='#/' className={styles.link}>Products</a>
                </div>
                
                <div className={styles['profile-icon']}>
                    <Text variant={'span'} style={{color: 'blue'}}>U</Text>
                </div>
            </ContentContainer>
        </nav>
    )
}