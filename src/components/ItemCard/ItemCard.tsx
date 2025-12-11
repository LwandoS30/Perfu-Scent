import React from 'react';
import styles from './ItemCard.module.css';
import { Text } from '../Text/Text';

type ItemCardProps = {
    name: string,
    imgLink: string,
    description: string,
    price: number,
    rating?: 0
}

export const ItemCard: React.FC<ItemCardProps> = ({ name, imgLink, description, price, rating }) => {
    return(
        <article className={styles['item-card']}>
            <img className={styles['item-image']} src={imgLink} alt={`This is a 40ml Perfume: ${description}`}/>
            <Text variant={'span'} style={{fontWeight: '600px'}}> {name} </Text>
            <Text variant={'span'} > {description} </Text>
            <Text variant={'span'} style={{ fontWeight: '700px'}}> R{price}</Text>
            <Text variant={'span'} > {rating} </Text>
        </article>
    )
}