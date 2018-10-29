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
### [See wireframe here](https://balsamiq.cloud/satp86q/ptjyh0o/r2164).
This will have a clean, uncluttered, and modern look, with ample whitespace to allow the prompt to stand out.  It should be warm and **very** visually appealing.
  * Add-On Features

    - Background colors of individual submissions can reflect certain things (time of submission, etc).
    - Users can create a board(? together, practicing gratitude with and for each other.
    - Create social shareables from current and previous submissions

  * Background color: #fff;

## 6. Data Elements - like instagram for journaling(?)
* User Information (table)
  - id (columns)
  - First name  
  - Last name
  - Email address
  - Screen name
  - Number of posts
  - Number of followers
  - Number of people following

* Post Information(table)
  - id (columns)
  - Image or text?
  - Date submitted
  - Time submitted
  - Location submitted (gps coordinates)
  - Favorite (y/n)
  - Status (private/public)

* Pivot Table 1 (from table: User Information && table: Post Information) - Displayed to User:
  - Screen name
  - Image/text
  - Date submitted
  - Time submitted
  - Favorite (y/n)
  - Status (private/public)

* Pivot Table 2 (from table: User Information && Post Information) - Stats (displayed to user?)
  - Number of posts
  - Number of followers
  - Number of people following
  - Time most frequently submitted
  - Day of the week most frequently submitted
  - Number of public posts
  - Number of private post


## 7. How The Pages Will Look
### [See wireframe here](https://balsamiq.cloud/satp86q/ptjyh0o/r2164).
