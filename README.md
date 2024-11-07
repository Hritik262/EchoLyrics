

# EchoLyrics 🎶

EchoLyrics is a web application that allows users to search for lyrics by artist or song name. Built using Laravel and Tailwind CSS, the app leverages the Genius API for fetching real-time song lyrics and artist information. 

## Features 🚀

- **Search by Artist or Song**: Easily search for lyrics by entering an artist name or song title.
- **Dynamic Results**: Displays results in a clean, responsive card layout with clickable links to the full lyrics.
- **Real-Time API Integration**: Fetches lyrics and song details from the Genius API.
- **Persistent Search Bar**: Search functionality is available on every results page to allow new queries.

## Screenshots 📸

### Home Page

### Search Results Page

## Tech Stack 🛠

- **Backend**: [Laravel](https://laravel.com/)
- **Frontend**: [Tailwind CSS](https://tailwindcss.com/)
- **API**: [Genius API (via RapidAPI)](https://rapidapi.com/)

## Installation & Setup 🔧

1. **Clone the repository**:
    ```bash
    git clone https://github.com/skp3214/echolyrics.git
    cd echolyrics
    ```

2. **Install dependencies**:
    ```bash
    composer install
    npm install && npm run dev
    ```

3. **Set up environment variables**:
    - Copy the `.env.example` file to `.env`:
      ```bash
      cp .env.example .env
      ```
    - Generate an application key:
      ```bash
      php artisan key:generate
      ```
    - Add your Genius API key in the `.env` file:
      ```plaintext
      SONG_API_KEY=your_genius_api_key_here
      ```

4. **Run the application**:
    ```bash
    php artisan serve
    ```

5. **Access the app**:
    - Go to [http://localhost:8000](http://localhost:8000) in your browser.

## Usage 📖

1. On the **home page**, enter the song title or artist name in the search bar.
2. Click **Search** to fetch and display matching results.
3. Each result displays:
   - Song title and artist name
   - Thumbnail image
   - Link to the full lyrics on Genius

4. Use the search bar on the results page to perform additional searches without returning to the homepage.

## Project Structure 📂

- **Controllers**: Handles API calls and search functionality (`ApiController.php`).
- **Views**: `welcome.blade.php` (home page) and `search-results.blade.php` (results page).
- **Routes**: Defined in `web.php`.
- **Environment Variables**: API keys and configuration in `.env`.

## API Integration 🔗

The app uses the **Genius API** to fetch song lyrics and details. For the Genius API integration:
- **Base URL**: `https://genius-song-lyrics1.p.rapidapi.com/search`
- **Headers**: `x-rapidapi-key`, `x-rapidapi-host`
- **Query Parameters**: `q` (query), `per_page` (results per page), `page` (pagination)

## Contributing 🤝

Contributions are welcome! Please fork the repo and create a pull request.

## License 📜

This project is licensed under the MIT License. 

## Contact 📬

For any questions or suggestions, please feel free to reach out:
- **Email**: [skprajapati3214@gmail.com](mailto:skprajapati3214@gmail.com)
- **LinkedIn**: [linkedin.com/in/skp3214](https://www.linkedin.com/in/skp3214)

--- 

