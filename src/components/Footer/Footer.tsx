import React from 'react';
import { ContentContainer } from '../componentContainer';   
import styles from './Footer.module.css';

export const Footer: React.FC<any> = () => {
    return(
        <footer>
            <ContentContainer>
                <h5>Perfu-Scent &copy; 2025</h5>
            </ContentContainer>
        </footer>
    )
}