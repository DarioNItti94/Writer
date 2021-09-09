
CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` text NOT NULL,
  `hashed_pwd` char(64) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `role` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `permission` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `role_permission` (
    `role_id` int(10) UNSIGNED NOT NULL,
    `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `author` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




CREATE TABLE `book` (
  `id` int(10) UNSIGNED NOT NULL,
  `isbn` text NOT NULL,
  `title` text NOT NULL,
  `edition` text NOT NULL,
  `pub_date` date NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `price` float NOT NULL,
  `publisher_id` int(10) UNSIGNED NOT NULL,
  `pic` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `book_author` (
  `author_id` int(10) UNSIGNED NOT NULL,
  `book_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `book_category` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `book_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `book_review` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `rating` int(10) NOT NULL,
  `submission_date` datetime DEFAULT current_timestamp(),
  `customer_id` int(10) UNSIGNED NOT NULL,
  `book_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `customer_address` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `recipient` text NOT NULL,
  `optional_info` text NOT NULL,
  `street` text NOT NULL,
  `town` text NOT NULL,
  `province` text NOT NULL,
  `postcode` text NOT NULL,
  `state` text NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `customer_wishlist` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `book_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `submission_date` datetime DEFAULT current_timestamp(),
  `status` text NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `order_item` (
  `id` int(10) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `subtotal` float NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `book_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `publisher` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `shopping_cart` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `shopping_cart_item` (
  `id` int(10) UNSIGNED NOT NULL,
  `item_quantity` int(10) UNSIGNED NOT NULL,
  `subtotal` float NOT NULL,
  `shopping_cart_id` int(10) UNSIGNED NOT NULL,
  `book_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



ALTER TABLE `user`
ADD PRIMARY KEY (`id`);

ALTER TABLE `user`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;


ALTER TABLE `role`
ADD PRIMARY KEY (`id`);

ALTER TABLE `role`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;


ALTER TABLE `permission`
ADD PRIMARY KEY (`id`);

ALTER TABLE `permission`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;


ALTER TABLE `role_permission`
ADD PRIMARY KEY (`role_id`, `permission_id`),
ADD KEY `role_id` (`role_id`),
ADD KEY `permission_id` (`permission_id`);


ALTER TABLE `author`
ADD PRIMARY KEY (`id`);

ALTER TABLE `author`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;


ALTER TABLE `book`
ADD PRIMARY KEY (`id`);

ALTER TABLE `book`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;


ALTER TABLE `book_author`
ADD PRIMARY KEY (`author_id`, `book_id`),
ADD KEY `author_id` (`author_id`),
ADD KEY `book_id` (`book_id`);


ALTER TABLE `book_category`
ADD PRIMARY KEY (`category_id`, `book_id`),
ADD KEY `category_id` (`category_id`),
ADD KEY `book_id` (`book_id`);


ALTER TABLE `book_review`
ADD PRIMARY KEY (`id`);

ALTER TABLE `book_review`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;


ALTER TABLE `category`
ADD PRIMARY KEY (`id`);

ALTER TABLE `category`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;


ALTER TABLE `customer_address`
ADD PRIMARY KEY (`id`);

ALTER TABLE `customer_address`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;


ALTER TABLE `customer_wishlist`
ADD PRIMARY KEY (`customer_id`, `book_id`),
ADD KEY `customer_id` (`customer_id`),
ADD KEY `book_id` (`book_id`);


ALTER TABLE `order`
ADD PRIMARY KEY (`id`);

ALTER TABLE `order`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;


ALTER TABLE `order_item`
ADD PRIMARY KEY (`id`);

ALTER TABLE `order_item`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;


ALTER TABLE `publisher`
ADD PRIMARY KEY (`id`);

ALTER TABLE `publisher`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;


ALTER TABLE `shopping_cart`
ADD PRIMARY KEY (`id`);

ALTER TABLE `shopping_cart`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;


ALTER TABLE `shopping_cart_item`
ADD PRIMARY KEY (`id`);

ALTER TABLE `shopping_cart_item`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;



ALTER TABLE `user`
ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE;


ALTER TABLE `role_permission`
ADD CONSTRAINT `role_permission_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `role_permission_ibfk_2` FOREIGN KEY (`permission_id`) REFERENCES `permission` (`id`) ON DELETE CASCADE;


ALTER TABLE `book`
ADD CONSTRAINT `book_permission_ibfk_1` FOREIGN KEY (`publisher_id`) REFERENCES `publisher` (`id`) ON DELETE CASCADE;


ALTER TABLE `book_author`
ADD CONSTRAINT `book_author_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `author` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `book_author_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`) ON DELETE CASCADE;


ALTER TABLE `book_category`
ADD CONSTRAINT `book_category_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `book_category_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`) ON DELETE CASCADE;


ALTER TABLE `book_review`
ADD CONSTRAINT `book_review_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `book_review_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`) ON DELETE CASCADE;


ALTER TABLE `customer_address`
ADD CONSTRAINT `customer_address_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;


ALTER TABLE `customer_wishlist`
ADD CONSTRAINT `customer_wishlist_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `customer_wishlist_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`) ON DELETE CASCADE;


ALTER TABLE `order`
ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;


ALTER TABLE `order_item`
ADD CONSTRAINT `order_item_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `order_item_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`) ON DELETE CASCADE;


ALTER TABLE `shopping_cart`
ADD CONSTRAINT `shopping_cart_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;


ALTER TABLE `shopping_cart_item`
ADD CONSTRAINT `shopping_cart_item_ibfk_1` FOREIGN KEY (`shopping_cart_id`) REFERENCES `shopping_cart` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `shopping_cart_item_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`) ON DELETE CASCADE;
