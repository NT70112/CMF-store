import { renderCards } from './renderCards.js';

window.addEventListener('DOMContentLoaded', async () => {
    const productList = document.querySelector('.product-grid__list');
    if (!productList) return;

    try {
        const response = await fetch('data/product-data.JSON');
        if (!response.ok) {
            throw new Error(`Failed to load product data: ${response.status}`);
        }

        const products = await response.json();
        renderCards(products, productList);
        window.dispatchEvent(new Event('product-cards-rendered'));
    } catch (error) {
        console.error('Failed to load the catalog:', error);
    }
});
