# Broker Application

A modern web application built with Laravel and React using Inertia.js for seamless full-stack development.

## 🚀 Features

- **Laravel 12**: Latest PHP framework with powerful backend capabilities
- **React 19**: Modern frontend with the latest React features
- **Inertia.js**: SPA-like experience without API complexity
- **Tailwind CSS**: Utility-first CSS framework for rapid UI development
- **TypeScript**: Type-safe JavaScript for better development experience
- **Radix UI**: Accessible and customizable component library
- **Vite**: Fast build tool and development server

## 📋 Requirements

- PHP 8.2 or higher
- Node.js 18 or higher
- Composer
- SQLite/MySQL/PostgreSQL

## 🛠️ Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/Eyob-ts/Broker.git
   cd Broker
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install JavaScript dependencies**
   ```bash
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database setup**
   ```bash
   # For SQLite (default)
   touch database/database.sqlite
   
   # Run migrations
   php artisan migrate
   ```

6. **Build assets**
   ```bash
   npm run build
   ```

## 🏃‍♂️ Running the Application

### Development Mode
```bash
# Start all development servers (Laravel, Queue, Vite)
composer dev
```

Or run services individually:
```bash
# Backend server
php artisan serve

# Frontend development server
npm run dev

# Queue worker (if using queues)
php artisan queue:work
```

### Production Mode
```bash
# Build assets for production
npm run build

# Serve the application
php artisan serve --env=production
```

## 🧪 Testing

```bash
# Run tests
composer test

# Or use artisan
php artisan test
```

## 📝 Code Quality

```bash
# Format code
npm run format

# Check formatting
npm run format:check

# Lint JavaScript/TypeScript
npm run lint

# Fix PHP code style
./vendor/bin/pint
```

## 🔧 Available Scripts

### Composer Scripts
- `composer dev` - Start development servers
- `composer dev:ssr` - Start with SSR support
- `composer test` - Run tests

### NPM Scripts
- `npm run dev` - Start Vite development server
- `npm run build` - Build for production
- `npm run build:ssr` - Build with SSR support
- `npm run format` - Format code with Prettier
- `npm run lint` - Lint with ESLint
- `npm run types` - Type check with TypeScript

## 🏗️ Project Structure

```
├── app/                 # Laravel application code
├── bootstrap/          # Laravel bootstrap files
├── config/             # Configuration files
├── database/           # Database migrations, seeders, factories
├── public/             # Web server document root
├── resources/          # Frontend resources (React components, CSS)
├── routes/             # Route definitions
├── storage/            # Application storage
├── tests/              # Test files
└── vendor/             # Composer dependencies
```

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🙏 Acknowledgments

- [Laravel](https://laravel.com/) - The PHP framework
- [React](https://react.dev/) - The JavaScript library
- [Inertia.js](https://inertiajs.com/) - The modern monolith
- [Tailwind CSS](https://tailwindcss.com/) - The utility-first CSS framework
- [Radix UI](https://radix-ui.com/) - The accessible component library
