# 🔍 InstAnalyzer  
![InstAnalyzer Banner](https://github.com/user-attachments/assets/3b1f7164-09f9-4fbf-9a56-022d06ba58d0)

> **✨ Find out who doesn't follow you back — instantly, privately, and beautifully.**

**InstAnalyzer** is a modern, privacy-first web tool that helps you analyze your Instagram follow relationships by uploading your official Instagram data download.  
No login, no data collection — everything happens in your browser! 🛡️

[![Symfony](https://img.shields.io/badge/built%20with-Symfony-000000.svg?style=flat&logo=symfony)](https://symfony.com)
[![Tailwind CSS](https://img.shields.io/badge/styled%20with-Tailwind_CSS-38B2AC.svg?style=flat&logo=tailwind-css)](https://tailwindcss.com)

## ✨ Features

- **🔒 100% Client-Side Processing** – Your data never leaves your device  
- **🎨 Beautiful & Responsive UI** – Dark mode, glassmorphism, smooth animations  
- **📂 Multiple Followers Files Support** – Handles `followers_1.json`, `followers_2.json`, etc.  
- **🧠 Smart Insights** – See who doesn't follow you back with follow dates  
- **📑 Sorting** – By newest, oldest, or alphabetically  
- **⚡ One-Click Actions** – Copy usernames, open profiles, export results  
- **💾 Export Results** – Download as CSV or JSON  
- **🚫 No Sign-Up, No Tracking** – Zero data collection ❤️

## 🚀 How to Use

1. Go to **Instagram → Settings → Privacy → Your Activity → Download Your Information**  
2. Request your data (choose **JSON** format)  
3. Wait for the email, download and extract the ZIP 📥  
4. Open InstAnalyzer and upload:  
   - All `followers_*.json` files from the `followers_and_following` folder  
   - The `following.json` file  
5. Get instant results! ⚡️

> **Required files** 📋  
> - `followers_1.json` (and `followers_2.json`, `followers_3.json` if you have them)  
> - `following.json`

## 📸 Screenshots

| Home Page (Light) 🌞          | Results Page (Light) 🌞         |
|-------------------------------|---------------------------------|
| ![Home Light](https://github.com/user-attachments/assets/5e62bdb7-e510-437a-a3f4-dfd4fbebce5b) | ![Results Light](https://github.com/user-attachments/assets/430c4061-2f6d-49e9-8ed1-ff850bd9f6de) |

| Home Page (Dark) 🌙           | Results Page (Dark) 🌙          |
|-------------------------------|---------------------------------|
| ![Home Dark](https://github.com/user-attachments/assets/e09e353a-ecfe-43ae-a7ce-2231d90a4534) | ![Results Dark](https://github.com/user-attachments/assets/098528a5-12c1-4824-b98e-755c4e9c98b1) |

## 🛠️ Tech Stack

- **Backend**: PHP 8.1+ with Symfony 6/7  
- **Frontend**: Twig templates + Tailwind CSS (via CDN) + Lucide Icons

## 💻 Local Development

```bash
git clone https://github.com/yassindaboussi/InstAnalyzer.git
cd InstAnalyzer
composer install
php -S 127.0.0.1:8000 -t public