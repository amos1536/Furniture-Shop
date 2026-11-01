CREATE DATABASE IF NOT EXISTS FurnitureShop;
USE FurnitureShop;
-- Create the products table
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    category VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    image VARCHAR(255) NOT NULL,
    stock INT DEFAULT 0,
    status ENUM('Available', 'Out of Stock') DEFAULT 'Available',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- Insert products
INSERT INTO products (name, category, description, price, image, stock, status)
VALUES

-- Living Room Furniture
('Modern Sofa', 'Living Room',
'Stylish and comfortable sofa made with premium fabric or genuine leather, designed to provide maximum comfort and elegance.',
85000.00, 'modern sofa.png', 10, 'Available'),

('Recliner Chair', 'Living Room',
'Ergonomically designed recliner with adjustable reclining positions and soft cushioning for superior relaxation.',
35000.00, 'recliner.jpg', 8, 'Available'),

('Coffee Table', 'Living Room',
'Modern coffee table crafted from high-quality wood with a durable and elegant finish.',
15500.00, 'coffee-table.jpg', 20, 'Available'),

('TV Stand', 'Living Room',
'Contemporary TV stand with spacious shelves and cabinets for entertainment devices and accessories.',
22000.00, 'tv-stand.jpg', 12, 'Available'),

('Bookshelf', 'Living Room',
'Durable multi-tier wooden bookshelf suitable for books, decorations, and office organization.',
18000.00, 'bookshelf.jpg', 15, 'Available'),

-- Bedroom Furniture
('Bed', 'Bedroom',
'High-quality wooden and upholstered bed available in single, queen, and king sizes for maximum comfort.',
45000.00, 'bed.jpg', 10, 'Available'),

('Wardrobe', 'Bedroom',
'Spacious wardrobe with hanging rails, shelves, and drawers for organizing clothing and personal belongings.',
68000.00, 'wardrobe.jpg', 6, 'Available'),

('Bedside Table', 'Bedroom',
'Compact bedside table featuring drawers for storing books, lamps, phones, and daily essentials.',
9000.00, 'bedside-table.jpg', 18, 'Available'),

('Dressing Table', 'Bedroom',
'Elegant dressing table with a mirror and multiple storage compartments for cosmetics and accessories.',
25000.00, 'dressing-table.jpg', 10, 'Available'),

('Chest of Drawers', 'Bedroom',
'Stylish chest of drawers with multiple storage compartments for clothes, linens, and household items.',
21000.00, 'chest-drawers.jpg', 12, 'Available'),

-- Outdoor Furniture
('Patio Set', 'Outdoor',
'Complete outdoor dining and seating set made from weather-resistant materials, ideal for gardens and patios.',
120000.00, 'patio-set.jpg', 5, 'Available'),

('Outdoor Chair', 'Outdoor',
'Comfortable weather-resistant outdoor chair suitable for patios, balconies, and gardens.',
15000.00, 'outdoor-chair.jpg', 20, 'Available'),

-- Office Furniture
('Office Desk', 'Office',
'Modern office desk with a spacious work surface, storage drawers, and cable management features.',
30000.00, 'office-desk.jpg', 15, 'Available'),

('Office Chair', 'Office',
'Adjustable ergonomic office chair with lumbar support and breathable material for maximum comfort.',
18000.00, 'office-chair.jpg', 25, 'Available'),

-- Dining Furniture
('Dining Table', 'Dining',
'Elegant dining table crafted from premium hardwood, available in various sizes and finishes.',
40000.00, 'dining-table.jpg', 10, 'Available'),

('Dining Chair', 'Dining',
'Stylish and comfortable dining chair designed to complement modern dining tables.',
12000.00, 'dining-chair.jpg', 30, 'Available');