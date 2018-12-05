# www.ILoveItWhen.me

## 1. Objective
Provide a place for people to journal their gratitude in an easily accessible and shareable way.

## 2. Users (User Story)

#### Taylor
As Taylor, I want a place to store my most cherished memories, so that I can revisit and share them whenever I want to.

#### A Little More Detail:

Taylor just got back from an amazing date with her husband.  While she likes to jot down things she loves, journaling has always been a challenge.  Instead, she logs on ILoveItWhen.me and simply completes the prompt presented to her: "I love it when ________."

Hey eye catches something she had written a few days ago, displayed on the screen background.  There are other thins as well, all things that she loves.  Things like:
* "I love it when *my kids hug me when they get home from school*"
* "I love it when *our friends get together for game night*"
* "I love it when *I volunteer *at the pet shelter*"
* "I love it when *the leaves turn colors in the fall*"

After being lost in thought about those good experiences, she finally fills in the blank with what brought her there in the first place: "I love it when *my husband takes me out on a well-planned date.*"

This is added to the screen background, where she'll be reminded about the positive experience the next time she logs in.

## 3. The Problem Being Solved
Journaling is commonly accepted as being a positive activity, but it's difficult to get into the habit, especially when you're not sure what to write.  This positive journal makes it easy to practice gratitude, and look back on all the things we have to be thankful for in life.

## 4. File Structure
* Home
  - /git
  - /dist
  - /docs
  - /images
  - /src
    - /js
      - main.js
    - /sass
      - main.scss
    - index.html
  - .gitignore
  - README.md

## 5. Design Objectives
### [See wireframe here](https://balsamiq.cloud/satp86q/ptjyh0o).
This will have a clean, uncluttered, and modern look, with ample whitespace to allow the prompt to stand out.  It should be warm and **very** visually appealing.
  * Add-On Features

    - Background colors of individual submissions can reflect certain things (time of submission, etc).
    - Users can create a board(? together, practicing gratitude with and for each other.
    - Create social shareables from current and previous submissions

  * Background color: #fff;
  * [Social buttons for bootstrap](https://lipis.github.io/bootstrap-social/), installed via npm.

## 6. Data Elements - like instagram for journaling(?)
#### Tables
* User Information (table)
  - id (columns)
  - First name  
  - Last name
  - Email address
  - user name
  - Profile Picture
  - Profile Description
  - Total Number of posts

* Post Information(table)
  - id (columns)
  - Image
  - Date submitted
  - Time submitted
  - Location (gps)
  - Total number of hearts
  - Status (private/public)

#### Pivot Tables
* Displayed in UserFeed: (from table: User Information && table: Post Information)
  - user name
  - Image
  - Date submitted
  - Heart (y/n)
  - Status (private/public)

* Displayed in PublicFeed, starting with most recent post: (from table: Post Information)
  - Image
  - Date submitted
  - Location (gps)
  - Status (public)
  - Total number of hearts

* Stats (kept in databse) (from table: User Information && Post Information)
  - Number of posts
  - Number of followers
  - Number of people following
  - Time most frequently submitted
  - Day of the week most frequently submitted
  - Number of public posts
  - Number of private post
  - Time since last post

* Displayed in Profile: (from table: User Information && Post Information)
  - Profile Picture
  - Number of posts
  - Time since last posts
  - Profile Description
  - Image


* Data Structure
  - CREATE TABLE user_information (
      - id serial PRIMARY key,
      - first_name varchar(50) NOT null,
      - last_name varchar(50) NOT null,
      - email_address varchar(320) NOT null,
      - user_name varchar(15) NOT null,
      - profile_picture img,
      - profile_description varchar(50) NOT null,
      - profile_created DATE NOT NULL,
      - total_number_of_posts INTEGER NOT NULL
  - )




## 7. How The Pages Will Look
### [See wireframe here](WireFrame.pdf).
