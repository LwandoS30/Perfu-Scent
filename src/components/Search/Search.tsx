import React from 'react';
import { ContentContainer } from '../componentContainer';
import styles from './Search.module.css';
import { Searchbar } from '../Search/Searchbar';

export const Search = () => {
    return(
        <div className={styles['search-container']}>
            <ContentContainer className={styles['serachbar-container']}>
                <Searchbar />
            </ContentContainer>
        </div>
    )
}