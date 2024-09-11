<?php
    $json_data = file_get_contents("config.json");
    $data = json_decode($json_data, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css">
    <title>Dream Clean Adelaine</title>
</head>

<body>
    <header class="header">
        <nav>
            <div class="nav__bar">
                <div class="logo">
                    <a href="#"><img src="assets/logo.png" alt="logo"></a>
                </div>
                <div class="nav__menu__btn" id="menu-btn">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
            <ul class="nav__links" id="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#service">Services</a></li>
                <li><a href="#explore">Explore</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <button class="btn nav__btn" data-bs-toggle="modal" data-bs-target="#booking-modal">Book Now</button>
        </nav>
        <div class="section__container header__container" id="home">
            <p>Dream Clean Adelaide</p>
            <h1>The Clean That You Always Dreamed Of.</h1>
        </div>
    </header>

    <section class="section__container about__container" id="about">
        <div class="about__image">
            <img src="assets/about.jpg" alt="about" />
        </div>
        <div class="about__content">
            <p class="section__subheader">WHY US</p>
            <h2 class="section__header">We Are More Than Just a Cleaning Service!</h2>
            <p class="section__description">
                We are your partner in maintaining the impeccable presentation and cleanliness of your Airbnb,
                residential, and real estate properties. Founded by a team of seasoned professionals with over 20 years
                of experience in hospitality, healthcare, and customer service. We are committed to delivering results
                and ensuring client satisfaction!
            </p>
            <div class="about__btn">
                <button class="btn">Read More</button>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="service" id="service">
        <div class="section__container service__container">
            <div class="service__content">
                <p class="section__subheader">SERVICES</p>
                <h2 class="section__header">Strive Only For The Best.</h2>
                <ul class="service__list">
                    <li>
                        <span><i class="ri-community-line"></i></span>
                        Airbnb Cleaning
                    </li>
                    <li>
                        <span><i class="ri-home-8-line"></i></span>
                        Domestic/Residential Cleaning Sample Sample
                    </li>
                    <li>
                        <span><i class="ri-hotel-line"></i></span>
                        Commercial Cleaning
                    </li>
                    <li>
                        <span><i class="ri-home-smile-line"></i></span>
                        NDIS Cleaning
                    </li>
                    <li>
                        <span><i class="ri-truck-line"></i></span>
                        Moving In-Out Cleaning
                    </li>
                    <li>
                        <span><i class="ri-exchange-dollar-line"></i></span>
                        Pre-Sell Property Cleaning
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section__container room__container">
        <p class="section__subheader">SERVICES</p>
        <h2 class="section__header">We've got what you need!</h2>
        <div class="room__grid">

            <!-- Airbnb Cleaning Card -->
            <div class="room__card">

                <div class="room__card__image">
                    <img src="assets/room-1.jpg" alt="room">
                </div>

                <div class="room__card__details">
                    <h4><span>Airbnb Cleaning</span></h4>
                    <p>
                        Services included but not limited to
                    </p>
                    <ul class="accordion">
                        <li class="accordion__list">
                            <input type="radio" id="airbnb__cleaning__bedroom" name="airbnb__cleaning">
                            <label for="airbnb__cleaning__bedroom">Bedrooms</label>
                            <div class="content">
                                <ul>
                                    <li>Make beds with fresh linens.</li>
                                    <li>Dust and wipe down furniture surfaces including bedside tables, bedside
                                        lamp,
                                        and
                                        decorations.</li>
                                    <li>Vacuum and mop floors and dry.</li>
                                    <li>Clean and tidy shelves, drawer, and closet.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="airbnb__toilet__and__bath" name="airbnb__cleaning">
                            <label for="airbnb__toilet__and__bath">Toilet and Bath</label>
                            <div class="content">
                                <ul>
                                    <li>Clean and disinfect sinks, countertops, shower heads and faucet.</li>
                                    <li>Clean and shine mirrors.</li>
                                    <li>Scrub and sanitize toilets including bowl seat, door handles, light button,
                                        and
                                        exterior.</li>
                                    <li>Wipe down shower walls, tubs, and doors.</li>
                                    <li>Vacuum and mop hard floor and dry.</li>
                                    <li>Replenish toiletries if provided.</li>
                                    <li>Replace towels and bathmats with fresh ones.</li>
                                    <li>Empty and sanitize trash bins.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="airbnb__living__room" name="airbnb__cleaning">
                            <label for="airbnb__living__room">Living Room</label>
                            <div class="content">
                                <ul>
                                    <li>Dust and wipe down furniture including coffee table and side tables, floors
                                        lamps.
                                    </li>
                                    <li>Vacuum upholstery and carpets.</li>
                                    <li>Mop hard floors and dry.</li>
                                    <li>Clean electronic devices and remote control.</li>
                                    <li>Arrange throws pillows, shelves, and decorations.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="airbnb__kitchen" name="airbnb__cleaning">
                            <label for="airbnb__kitchen">Kitchen</label>
                            <div class="content">
                                <ul>
                                    <li>Clean and sanitize countertops and backsplash.</li>
                                    <li>Wash dishes and put away clean ones.</li>
                                    <li>Clean and shine kitchen sink, stove, and hood.</li>
                                    <li>Wipe down exterior of appliances, such as the stove, microwave, fridge, and
                                        dishwasher.</li>
                                    <li>Clean inside microwave and toaster oven of applicable.</li>
                                    <li>Vacuum and mop hard floor and dry.</li>
                                    <li>Clean inside fridge and throw away spoiled and expired food.</li>
                                    <li>Replenish coffee, milk, tea, and sugar if applicable.</li>
                                    <li>Empty and sanitize trash bins.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="airbnb__entryway__hallway" name="airbnb__cleaning">
                            <label for="airbnb__entryway__hallway">Entryway/Hallway</label>
                            <div class="content">
                                <ul>
                                    <li>Vacuum and mop hard floors and dry.</li>
                                    <li>Dust and wipe down surfaces, including entryway furniture.</li>
                                    <li>Empty trash bins if applicable.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="airbnb__outdoor__areas" name="airbnb__cleaning">
                            <label for="airbnb__outdoor__areas">Outdoor Areas (If applicable, extra charges may
                                apply)</label>
                            <div class="content">
                                <ul>
                                    <li>Sweep and hose down outdoor patio or deck.</li>
                                    <li>Wipe down outdoor furniture.</li>
                                    <li>Remove any visible debris.</li>
                                    <li>Remove any visible debris.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="airbnb__special_instruction" name="airbnb__cleaning">
                            <label for="airbnb__special_instruction">Special Instruction</label>
                            <div class="content">
                                <ul>
                                    <li>Follow any special instructions provided by the host, such as extra
                                        attention
                                        to certain areas or specific cleaning products to use.</li>
                                    <li>Note any damages or maintenance issues and report them to the host.</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="room__card__bottom">
                    <h5>Starting from <span>$45/hr</span></h5>
                    <button class="btn">Book Now</button>
                </div>
            </div>

            <!-- Basic Domestic/Residential Cleaning Card -->
            <div class="room__card">
                <div class="room__card__image">
                    <img src="assets/room-2.jpg" alt="room">
                </div>
                <div class="room__card__details">
                    <h4><span>Basic Domestic/Residential Cleaning</span></h4>
                    <p>
                        Services included but not limited to
                    </p>
                    <ul class="accordion">
                        <li class="accordion__list">
                            <input type="radio" id="basic__domestic__residential__bedroom"
                                name="basic__domestic__residential">
                            <label for="basic__domestic__residential__bedroom">Bedrooms</label>
                            <div class="content">
                                <ul>
                                    <li>Make beds with fresh linens (if requested)</li>
                                    <li>Dust and wipe down furniture surfaces, including bedside tables, dressers,
                                        and
                                        vanities if applicable.</li>
                                    <li>Vacuum all areas and mop hard floors and dry.</li>
                                    <li>Empty trash bins and replace new liners if applicable.</li>
                                    <li>Tidy bedroom items and organize if necessary.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="basic__domestic__residential__toilet__and__bath"
                                name="basic__domestic__residential">
                            <label for="basic__domestic__residential__toilet__and__bath">Toilet and Bath</label>
                            <div class="content">
                                <ul>
                                    <li>Clean and disinfect sinks, countertops, and faucet.</li>
                                    <li>Scrub and sanitize toilets including bowl seat, door handles, light button,
                                        and exterior.</li>
                                    <li>Clean and shine mirrors.</li>
                                    <li>Wipe down shower walls, tubs, and doors.</li>
                                    <li>Vacuum and mop hard floor and dry.</li>
                                    <li>Replenish toiletries if provided.</li>
                                    <li>Replace towels and bathmats with fresh ones if provided.</li>
                                    <li>Vacuum and mop hard floors and dry.</li>
                                    <li>Empty and sanitize trash bins.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="basic__domestic__residential__living__room__common__area"
                                name="basic__domestic__residential">
                            <label for="basic__domestic__residential__living__room__common__area">Living Room/Common
                                Area</label>
                            <div class="content">
                                <ul>
                                    <li>Dust and wipe down furniture including coffee table and side tables</li>
                                    <li>Vacuum upholstery and carpets.</li>
                                    <li>Mop hard floors and dry.</li>
                                    <li>Clean electronic devices and remote control.</li>
                                    <li>Arrange sofa pillows and throws.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="basic__domestic__residential__Kitchen"
                                name="basic__domestic__residential">
                            <label for="basic__domestic__residential__Kitchen">Kitchen</label>
                            <div class="content">
                                <ul>
                                    <li>Clean and sanitize countertops and backsplash.</li>
                                    <li>Wash dishes and put away clean ones.</li>
                                    <li>Clean and shine kitchen sink, stove, and hood.</li>
                                    <li>Wipe down exterior of appliances, such as the stove, microwave, fridge, and
                                        dishwasher.</li>
                                    <li>Clean inside microwave and toaster oven of applicable.</li>
                                    <li>Vacuum and mop hard floor and dry.</li>
                                    <li>Clean inside fridge and throw away spoiled and expired food.</li>
                                    <li>Replenish coffee, milk, tea, and sugar if applicable.</li>
                                    <li>Empty and sanitize trash bins.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="basic__domestic__residential__dining__area"
                                name="basic__domestic__residential">
                            <label for="basic__domestic__residential__dining__area">Dining Area</label>
                            <div class="content">
                                <ul>
                                    <li>Dust and wipe down dining table and chairs.</li>
                                    <li>Vacuum all area and mop hard floor and dry.</li>
                                    <li>Arrange and tidy decorations if applicable.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="basic__domestic__residential__entryway__hallway"
                                name="basic__domestic__residential">
                            <label for="basic__domestic__residential__entryway__hallway">Entryway/Hallway</label>
                            <div class="content">
                                <ul>
                                    <li>Vacuum and mop hard floors and dry.</li>
                                    <li>Dust and wipe down surfaces, including entryway furniture.</li>
                                    <li>Empty trash bins if applicable.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="basic__domestic__residential__outdoor__areas"
                                name="basic__domestic__residential">
                            <label for="basic__domestic__residential__outdoor__areas">Outdoor Areas(If applicable,
                                extra charges may apply)</label>
                            <div class="content">
                                <ul>
                                    <li>Sweep and hose down outdoor patio or deck.</li>
                                    <li>Wipe down outdoor furniture.</li>
                                    <li>Remove any visible debris.</li>
                                    <li>Empty and clean trash bins if applicable.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="basic__domestic__residential__special__instruction"
                                name="basic__domestic__residential">
                            <label for="basic__domestic__residential__special__instruction">Special Instruction</label>
                            <div class="content">
                                <ul>
                                    <li>Laundry room: Clean and organize laundry area.</li>
                                    <li>Follow any special instructions provided by the host, such as extra attention to
                                        certain areas or specific cleaning products to used.</li>
                                    <li>Any other specific areas or tasks requested by the homeowner.</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="room__card__bottom">
                    <h5>Starting from <span>$45/hr</span></h5>
                    <button class="btn">Book Now</button>
                </div>
            </div>

            <!-- NDIS Cleaning Card -->
            <div class="room__card">
                <div class="room__card__image">
                    <img src="assets/room-3.jpg" alt="room">
                </div>
                <div class="room__card__details">
                    <h4><span>NDIS Cleaning</span></h4>
                    <p>
                        Services included but not limited to
                    </p>
                    <ul class="accordion">
                        <li class="accordion__list">
                            <input type="radio" id="ndis__bedroom" name="ndis">
                            <label for="ndis__bedroom">Bedrooms</label>
                            <div class="content">
                                <ul>
                                    <li>Make beds with fresh linens (if requested)</li>
                                    <li>Dust and wipe down furniture surfaces, including bedside tables, dressers,
                                        and
                                        vanities if applicable.</li>
                                    <li>Vacuum all areas and mop hard floors and dry.</li>
                                    <li>Empty trash bins and replace new liners if applicable.</li>
                                    <li>Tidy bedroom items and organize if necessary.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="ndis__toilet__and__bath" name="ndis">
                            <label for="ndis__toilet__and__bath">Toilet and Bath</label>
                            <div class="content">
                                <ul>
                                    <li>Clean and disinfect sinks, countertops, and faucet.</li>
                                    <li>Scrub and sanitize toilets including bowl seat, door handles, light button,
                                        and exterior.</li>
                                    <li>Clean and shine mirrors.</li>
                                    <li>Wipe down shower walls, tubs, and doors.</li>
                                    <li>Replenish toiletries if provided.</li>
                                    <li>Replace towels and bathmats with fresh ones if provided.</li>
                                    <li>Vacuum or sweep and mop hard floor and dry.</li>
                                    <li>Empty and sanitize trash bins.</li>
                                    <li>Ensure accessibility features are maintained and functional, such as grab bars
                                        and non-slip mats.</li>
                                    <li>Ensure pathways are clear and free of obstacles for individuals with mobility
                                        challenges.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="ndis__living__room__common__area" name="ndis">
                            <label for="ndis__living__room__common__area">Living Room/Common
                                Area</label>
                            <div class="content">
                                <ul>
                                    <li>Dust and wipe down furniture including coffee table and side tables</li>
                                    <li>Vacuum upholstery and carpets.</li>
                                    <li>Mop hard floors and dry.</li>
                                    <li>Clean electronic devices and remote control.</li>
                                    <li>Arrange sofa pillows and throws.</li>
                                    <li>Empty trash bins if applicable.</li>
                                    <li>Ensure accessibility and ease of movement within the living areas.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="ndis__kitchen" name="ndis">
                            <label for="ndis__kitchen">Kitchen</label>
                            <div class="content">
                                <ul>
                                    <li>Clean and sanitize countertops and backsplash.</li>
                                    <li>Place dirty dishes on dispenser and put away clean ones.</li>
                                    <li>Clean and shine kitchen sink and faucets.</li>
                                    <li>Wipe down exterior of appliances, such as the stove, microwave, fridge, and
                                        dishwasher.</li>
                                    <li>Clean inside microwave and toaster oven of applicable.</li>
                                    <li>Vacuum and mop hard floor and dry.</li>
                                    <li>Ensure accessible storage for food items and kitchen utensils.</li>
                                    <li>Ensure accessibility to appliances and work surfaces for individuals with
                                        mobility challenges.</li>
                                    <li>Empty and sanitize trash bins.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="ndis__dining__area" name="ndis">
                            <label for="ndis__dining__area">Dining Area</label>
                            <div class="content">
                                <ul>
                                    <li>Dust and wipe down dining table and chairs.</li>
                                    <li>Vacuum all area and mop hard floor and dry.</li>
                                    <li>Arrange and tidy decorations if applicable.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="ndis__entryway__hallway" name="ndis">
                            <label for="ndis__entryway__hallway">Entryway/Hallway</label>
                            <div class="content">
                                <ul>
                                    <li>Vacuum and mop hard floors and dry.</li>
                                    <li>Dust and wipe down surfaces, including entryway furniture.</li>
                                    <li>Empty trash bins if applicable.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="ndis__outdoor__areas" name="ndis">
                            <label for="ndis__outdoor__areas">Outdoor Areas(If applicable,
                                extra charges may apply)</label>
                            <div class="content">
                                <ul>
                                    <li>Sweep and hose down outdoor patio or deck.</li>
                                    <li>Wipe down outdoor furniture.</li>
                                    <li>Remove any visible debris.</li>
                                    <li>Empty and clean trash bins if applicable.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="ndis__accessibility__features" name="ndis">
                            <label for="ndis__accessibility__features">Accessibility Features</label>
                            <div class="content">
                                <ul>
                                    <li>Check and maintain accessibility features such as ramps, handrails, and lift
                                        mechanisms.</li>
                                    <li>Ensure that emergency exits are clear and accessible.</li>
                                    <li>Report any maintenance issues or accessibility concerns to the appropriate
                                        authorities.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="ndis__additional__support" name="ndis">
                            <label for="ndis__additional__support">Additional Support</label>
                            <div class="content">
                                <ul>
                                    <li>Provide additional support as needed for individuals with specific needs.</li>
                                    <li>Ensure that emergency exits are clear and accessible.</li>
                                    <li>Collaborate with caregivers or support coordinators to ensure that cleaning
                                        services are aligned with the individual care plan and goals.</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="room__card__bottom">
                    <h5>Starting from <span>$54/hr</span></h5>
                    <button class="btn">Book Now</button>
                </div>
            </div>

            <!-- Commercial Cleaning Services Card -->
            <div class="room__card">
                <div class="room__card__image">
                    <img src="assets/room-4.jpg" alt="room">
                </div>
                <div class="room__card__details">
                    <h4><span>Commercial Cleaning</span></h4>
                    <p>
                        Services included but not limited to
                    </p>
                    <ul class="accordion">
                        <li class="accordion__list">
                            <input type="radio" id="commercial__cleaning__general__areas" name="commercial__cleaning">
                            <label for="commercial__cleaning__general__areas">General Areas</label>
                            <div class="content">
                                <ul>
                                    <li>Reception area: clean and tidy reception desk, dust furniture, vacuum or sweep
                                        floors, mop hard floors, and clean glass surfaces.</li>
                                    <li>Lobby or waiting area: Dust furniture, vacuum floors, dust surfaces, and clean
                                        glass surfaces.</li>
                                    <li>Staircases: Sweep or vacuum stairs, wipe down handrails, and remove debris.</li>
                                    <li>Hallway and corridors: Sweep or vacuum floors, dust surfaces, remove cobwebs.
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="commercial__cleaning__wordplaces" name="commercial__cleaning">
                            <label for="commercial__cleaning">Workplaces</label>
                            <div class="content">
                                <ul>
                                    <li>Desks and workstations: Dust surfaces, wipe down desktops, clean computers
                                        monitor and organise desk accessories if necessary.</li>
                                    <li>Chairs: Dust and wipe down chair surfaces, including armrests and bases.</li>
                                    <li>File cabinets and storage units: Dust and wipe down surfaces, and organize
                                        contents as needed.</li>
                                    <li>Vacuum all areas and mop hard floors and dry.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="commercial__cleaning__meeting__room__and__conference__room"
                                name="commercial__cleaning">
                            <label for="commercial__cleaning__meeting__room__and__conference__room">Meeting Room and
                                Conference Room</label>
                            <div class="content">
                                <ul>
                                    <li>Dust and wipe down tables and chairs.</li>
                                    <li>Clean and sanitize teleconference equipment, whiteboard, and presentation
                                        screens.</li>
                                    <li>Vacuum and mop hard floors and dry.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="commercial__cleaning__kitchen__break__room"
                                name="commercial__cleaning">
                            <label for="commercial__cleaning__kitchen__break__room">Kitchen/Break Room</label>
                            <div class="content">
                                <ul>
                                    <li>Clean and sanitize countertops, tables, and chairs.</li>
                                    <li>Place dirty dishes in the dispenser and put away clean ones.</li>
                                    <li>Clean and shine sink and faucets.</li>
                                    <li>Wipe down exterior appliances, such as microwave, fridge, and dishwasher.</li>
                                    <li>Vacuum and mop hard floors and dry.</li>
                                    <li>Empty and clean toaster crumb tray.</li>
                                    <li>Empty and sanitize trash bins and replace liners.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="commercial__cleaning__restrooms" name="commercial__cleaning">
                            <label for="commercial__cleaning__restrooms">Restrooms</label>
                            <div class="content">
                                <ul>
                                    <li>Clean and disinfect sinks, countertops, and faucets.</li>
                                    <li>Scrub and sanitize toilets, including the bowl, seat and exterior.</li>
                                    <li>Clean and shine mirrors and glass surfaces.</li>
                                    <li>Wipe down partition walls and stall doors if applicable.</li>
                                    <li>Replenish toiletries if provided.</li>
                                    <li>Replace towels and refill hand soap dispensers.</li>
                                    <li>Vacuum and mop hard floors and dry.</li>
                                    <li>Empty the bins and change liners.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="commercial__cleaning__break__area" name="commercial__cleaning">
                            <label for="commercial__cleaning__break__area">Break Area</label>
                            <div class="content">
                                <ul>
                                    <li>Dust and wipe down surfaces, tables, and chairs.</li>
                                    <li>Vacuum and mop hard floors and dry.</li>
                                    <li>Empty trash bins and replace liners.</li>
                                    <li>Ensure cleanliness and organization of communal items such as coffee makers
                                        and water dispensers.</li>
                                    <li>Replenish food items if provided.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="commercial__cleaning__additional__area" name="commercial__cleaning">
                            <label for="commercial__cleaning__additional__area">Additional Area(If applicable,
                                extra charges may apply)</label>
                            <div class="content">
                                <ul>
                                    <li>Cleaning window, blinds, and windowsills.</li>
                                    <li>Dusting and cleaning of light fixtures and ceiling fans.</li>
                                    <li>Spot cleaning the walls and baseboards.</li>
                                    <li>Cleaning of air vents and HVAC grills.</li>
                                    <li>Carpet cleaning or spot treatment as needed.</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="room__card__bottom">
                    <h5>Starting from <span>$45/hr</span></h5>
                    <button class="btn">Book Now</button>
                </div>
            </div>

            <!-- Moving In-Out Cleaning Card -->
            <div class="room__card">
                <div class="room__card__image">
                    <img src="assets/room-5.jpg" alt="room">
                </div>
                <div class="room__card__details">
                    <h4><span>Moving In-Out Cleaning</span></h4>
                    <p>
                        Services included but not limited to
                    </p>
                    <ul class="accordion">
                        <li class="accordion__list">
                            <input type="radio" id="moving__in__out__cleaning__general__areas"
                                name="moving__in__out__cleaning">
                            <label for="moving__in__out__cleaning__general__areas">General Areas</label>
                            <div class="content">
                                <ul>
                                    <li>Dusting all surfaces including shelves, windows sills, baseboards, and light
                                        fixtures.</li>
                                    <li>Wiping down doors, door frames and switch plates.</li>
                                    <li>Cleaning and sanitizing light switches and outlets.</li>
                                    <li>Removing cobwebs from corners and ceilings.</li>
                                    <li>Spot cleaning walls and side railings for marks and dust. </li>
                                    <li>Cleaning interior windows and window tracks.</li>
                                    <li>Vacuum or sweeping floors.</li>
                                    <li>Mop hard floors and dry.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="moving__in__out__cleaning__kitchen"
                                name="moving__in__out__cleaning">
                            <label for="moving__in__out__cleaning__kitchen">Kitchen(Deep Cleaning)</label>
                            <div class="content">
                                <ul>
                                    <li>Clean and sanitize countertops and backsplash.</li>
                                    <li>Clean and sanitize dishwasher.</li>
                                    <li>Clean and shine kitchen sink and faucets.</li>
                                    <li>Clean inside microwave and toaster oven of applicable.</li>
                                    <li>Clean kitchen drawer exteriors and interiors.</li>
                                    <li>Clean and brush electric or gas stove and hood. </li>
                                    <li>Vacuum and mop hard floor and dry.</li>
                                    <li>Empty and sanitize trash bins.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="moving__in__out__cleaning__toilet__and__bath"
                                name="moving__in__out__cleaning">
                            <label for="moving__in__out__cleaning__toilet__and__bath">Toilet and Bath(Deep
                                Cleaning)</label>
                            <div class="content">
                                <ul>
                                    <li>Clean and disinfect sinks, countertops, and faucet.</li>
                                    <li>Scrub and sanitize toilets including bowl seat, door handles, light button,
                                        and exterior.</li>
                                    <li>Clean and shine mirrors.</li>
                                    <li>Wipe down shower walls, tubs, and doors.</li>
                                    <li>Scrub and brush tiles and spot cleaning of walls.</li>
                                    <li>Remove cobwebs and clean all drawer interior and exterior.</li>
                                    <li>Vacuum or sweep floors and dry.</li>
                                    <li>Empty and sanitize trash bins.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="moving__in__out__cleaning__bedrooms"
                                name="moving__in__out__cleaning">
                            <label for="moving__in__out__cleaning__bedrooms">Bedrooms(Deep Cleaning)</label>
                            <div class="content">
                                <ul>
                                    <li>Make beds with fresh linens (if requested)</li>
                                    <li>Dust and wipe down furniture surfaces, including bedside tables, dressers,
                                        drawers, and closets interior and exterior. </li>
                                    <li>Wipe and shine mirrors.</li>
                                    <li>Vacuum all areas and mop hard floors and dry.</li>
                                    <li>Remove cobwebs.</li>
                                    <li>Dust and wipe down light fixtures, switches and spot cleaning of walls and
                                        side railings. </li>
                                    <li>Tidy bedroom items and organize if necessary.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="moving__in__out__cleaning__living__area"
                                name="moving__in__out__cleaning">
                            <label for="moving__in__out__cleaning__living__area">Living Area(Deep Cleaning)</label>
                            <div class="content">
                                <ul>
                                    <li>Dust and wipe down furniture including coffee table and side tables.</li>
                                    <li>Vacuum upholstery and carpets.</li>
                                    <li>Spot cleaning of walls and side railing for mark and dust.</li>
                                    <li>Vacuum and mop hard floors and dry.</li>
                                    <li>Clean electronic devices and remote control.</li>
                                    <li>Organize sofa pillows and throws.</li>
                                    <li>Clean drawers exterior and interior.</li>
                                    <li>Wipe down and organize shelves and decorations if applicable.</li>
                                    <li>Remove cobwebs, dusting light fixtures, and switches.</li>
                                    <li>Clean and shine windows and sliding doors interior.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="moving__in__out__cleaning__outdoor__area"
                                name="moving__in__out__cleaning">
                            <label for="moving__in__out__cleaning__outdoor__area">Outdoor Area (If applicable, extra
                                charges
                                may apply)</label>
                            <div class="content">
                                <ul>
                                    <li>Sweeping porches, decks, or balconies.</li>
                                    <li>Removing cobwebs from outdoor area.</li>
                                    <li>Dusting and wiping down outdoor furniture.</li>
                                    <li>Wiping down exterior doors and windows.</li>
                                    <li>Mowing the lawn and trimming bushes if necessary.</li>
                                    <li>Ensuring that the exterior of the property looks well-maintained and
                                        attractive.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="commercial__cleaning__additional__area" name="commercial__cleaning">
                            <label for="commercial__cleaning__additional__area">Additional Area(If applicable,
                                extra charges may apply)</label>
                            <div class="content">
                                <ul>
                                    <li>Cleaning window, blinds, and windowsills.</li>
                                    <li>Dusting and cleaning of light fixtures and ceiling fans.</li>
                                    <li>Spot cleaning the walls and baseboards.</li>
                                    <li>Cleaning of air vents and HVAC grills.</li>
                                    <li>Carpet cleaning or spot treatment as needed.</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="room__card__bottom">
                    <h5>Starting from <span>$340/hr</span></h5>
                    <button class="btn">Book Now</button>
                </div>
            </div>

            <!-- Pre-Sell Property Card -->
            <div class="room__card">
                <div class="room__card__image">
                    <img src="assets/room-6.jpg" alt="room">
                </div>
                <div class="room__card__details">
                    <h4><span>Pre-Sell Property</span></h4>
                    <p>
                        Services included but not limited to
                    </p>
                    <ul class="accordion">
                        <li class="accordion__list">
                            <input type="radio" id="pre__sell__property__general__areas" name="pre__sell__property">
                            <label for="pre__sell__property__general__areas">General Areas</label>
                            <div class="content">
                                <ul>
                                    <li>Dusting all surfaces including shelves, windows sills, baseboards, and light
                                        fixtures.</li>
                                    <li>Wiping down doors, door frames and switch plates.</li>
                                    <li>Cleaning and sanitizing light switches and outlets.</li>
                                    <li>Removing cobwebs from corners and ceilings.</li>
                                    <li>Spot cleaning walls and side railings for marks and dust. </li>
                                    <li>Cleaning interior windows and window tracks.</li>
                                    <li>Vacuum or sweeping floors.</li>
                                    <li>Mop hard floors and dry.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="pre__sell__property__kitchen" name="pre__sell__property">
                            <label for="pre__sell__property__kitchen">Kitchen</label>
                            <div class="content">
                                <ul>
                                    <li>Clean and sanitize countertops and backsplash.</li>
                                    <li>Clean and sanitize dishwasher.</li>
                                    <li>Clean and shine kitchen sink and faucets.</li>
                                    <li>Clean kitchen drawer exteriors and interiors.</li>
                                    <li>Clean and shine electric or gas stove and hood. </li>
                                    <li>Vacuum and mop hard floor and dry.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="pre__sell__property__toilet__and__bath" name="pre__sell__property">
                            <label for="pre__sell__property__toilet__and__bath">Toilet and Bath</label>
                            <div class="content">
                                <ul>
                                    <li>Clean and disinfect sinks, countertops, and faucet.</li>
                                    <li>Scrub and sanitize toilets including bowl seat, door handles, light button,
                                        and exterior.</li>
                                    <li>Clean and shine mirrors.</li>
                                    <li>Wipe down shower walls, tubs, and doors.</li>
                                    <li>Scrub and brush tiles and spot cleaning of walls.</li>
                                    <li>Remove cobwebs and clean all drawer interior and exterior.</li>
                                    <li>Vacuum or sweep floors and dry.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="pre__sell__property__bedrooms" name="pre__sell__property">
                            <label for="pre__sell__property__bedrooms">Bedrooms</label>
                            <div class="content">
                                <ul>
                                    <li>Dust and wipe down furniture surfaces, including bedside tables, dressers,
                                        drawers, and closets interior and exterior. </li>
                                    <li>Wipe and shine mirrors.</li>
                                    <li>Vacuum all areas and mop hard floors and dry.</li>
                                    <li>Remove cobwebs.</li>
                                    <li>Dust and wipe down light fixtures, switches and spot cleaning of walls and
                                        side railings. </li>
                                    <li>Tidy bedroom items and organize if necessary.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="pre__sell__property__living__area" name="pre__sell__property">
                            <label for="pre__sell__property__living__area">Living Area</label>
                            <div class="content">
                                <ul>
                                    <li>Dust and wipe down furniture including coffee table and side tables.</li>
                                    <li>Vacuum upholstery and carpets.</li>
                                    <li>Spot cleaning of walls and side railing for mark and dust.</li>
                                    <li>Vacuum and mop hard floors and dry.</li>
                                    <li>Clean electronic devices and remote control.</li>
                                    <li>Organize sofa pillows and throws.</li>
                                    <li>Clean drawers exterior and interior.</li>
                                    <li>Wipe down and organize shelves and decorations if applicable.</li>
                                    <li>Remove cobwebs, dusting light fixtures, and switches.</li>
                                    <li>Clean and shine windows and sliding doors interior.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion__list">
                            <input type="radio" id="pre__sell__property__outdoor__area" name="pre__sell__property">
                            <label for="pre__sell__property__outdoor__area">Outdoor Area (If applicable, extra
                                charges
                                may apply)</label>
                            <div class="content">
                                <ul>
                                    <li>Sweeping porches, decks, or balconies.</li>
                                    <li>Removing cobwebs from outdoor area.</li>
                                    <li>Dusting and wiping down outdoor furniture.</li>
                                    <li>Wiping down exterior doors and windows.</li>
                                    <li>Mowing the lawn and trimming bushes if necessary.</li>
                                    <li>Ensuring that the exterior of the property looks well-maintained and
                                        attractive.</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="room__card__bottom">
                    <h5>Starting from <span>$340/hr</span></h5>
                    <button class="btn">Book Now</button>
                </div>
            </div>

            <!-- Basic Gardening Card -->
            <div class="room__card">
                <div class="room__card__image">
                    <img src="assets/room-7.jpg" alt="room">
                </div>
                <div class="room__card__details">
                    <h4><span>Basic Gardening</span></h4>
                    <p>
                        Services included but not limited to
                    </p>

                    <ul>
                        <li>Watering.</li>
                        <li>Fertilising and treating soil.</li>
                        <li>Pruning hedges, shrubs, and trees, and lopping branches where necessary.</li>
                        <li>Mowing lawns and trimming or weeding garden beds. </li>
                        <li>Spraying and treating plants to control disease or insects.</li>
                    </ul>

                    <div class="room__card__bottom">
                        <h5>Starting from <span>$45/hr</span></h5>
                        <button class="btn">Book Now</button>
                    </div>
                </div>
            </div>

            <!-- Basic Gardening Card -->
            <div class="room__card">
                <div class="room__card__image">
                    <img src="assets/room-8.jpg" alt="room">
                </div>
                <div class="room__card__details">
                    <h4><span>Basic Driveway and Pavement Cleaning </span></h4>
                    <p>
                        Renovate your driveway with our high-pressure cleaning service, effectively removing dirt, oil
                        spills, and grime to create an inviting and attractive entrance. Give your home a fresh look
                        that welcomes guests with a clean and pristine driveway. Reach out to us now to schedule your
                        appointment and revitalize your property!
                    </p>

                    <div class="room__card__bottom">
                        <h5>Starting from <span>$150</span></h5>
                        <button class="btn">Book Now</button>
                    </div>
                </div>
            </div>
    </section>

    <footer class="footer" id="contact">
        <div class="section__container footer__container">
            <div class="footer__col">
                <div class="logo">
                    <a href="#home"><img src="assets/logo.png" alt="logo"></a>
                </div>
                <p class="section__description">
                    We are your partner in maintaining the impeccable presentation and cleanliness of your Airbnb,
                    residential, and real estate properties. Founded by a team of seasoned professionals with over 20
                    years of experience in hospitality, healthcare, and customer service. We are committed to delivering
                    results and ensuring client satisfaction!
                </p>
                <button class="btn">Book Now</button>
            </div>
            <div class="footer__col">
                <h4>OUR SERVICES</h4>
                <ul class="footer__links">
                    <li><a href="#">Airbnb Cleaning</a></li>
                    <li><a href="#">Domestic/Residential Cleaning</a></li>
                    <li><a href="#">Commercial Cleaning</a></li>
                    <li><a href="#">NDIS Cleaning</a></li>
                    <li><a href="#">Moving In-Out Cleaning</a></li>
                    <li><a href="#">Pre-Sell Property Cleaning</a></li>
                </ul>
            </div>
            <div class="footer__col">
                <h4>CONTACT US</h4>
                <ul class="footer__links">
                    <li>
                        <span><i class="ri-mail-line"></i></span>
                        <a href="#">admin@dreamcleanadelaide.com.au</a>

                    </li>
                </ul>
                <div class="footer__socials">
                    <a href="#"><img src="assets/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="assets/instagram.png" alt="instagram"></a>
                    <a href="#"><img src="assets/youtube.png" alt="youtube"></a>
                    <a href="#"><img src="assets/twitter.png" alt="twitter"></a>
                </div>
            </div>
        </div>
        <div class="footer__bar">
            Copyright © 2024 Dream Clean Adelaide. All rights reserved.
        </div>
    </footer>

    <div class="popup-container">
        <div class="popup-dialog">
            <div class="popup-box" id="popup-box">
                <div class="popup-header">
                    <h5>Let's clean your home</h5>
                </div>
                <div class="popup-body">
                    <form action="booknow.php" method="POST">
                        <input type="text" name="full_name" placeholder="Full Name" required>
                        <input type="text" name="contact_number" placeholder="Contact Number" required>
                        <input type="text" name="email_address" placeholder="Email Address">
                        <select name="city" id="cityselect" required>
                            <option value>City</option>
                            <?php
                                foreach($data[0]["cities"] as $city) {
                                    echo "<option value='{$city}'>{$city}</option>";
                                }
                            ?>
                        </select>
                        <textarea name="message" col="40" rows="10" placeholder="Inquiry/Message" required></textarea>
                        <p>Thank you for taking time to fill in the data! You are a step away to cleaner & healthier home. Kindly wait for our quotation within the day or latest tomorrow.</p>
                        <input type="submit" value="Book Now">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="main.js"></script>
</body>

</html>


