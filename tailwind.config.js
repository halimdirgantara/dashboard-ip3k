/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: "#1E40AF",      // biru tua sidebar & header
        secondary: "#3B82F6",    // biru terang elemen aktif
        accent: "#FACC15",       // aksen kuning
        success: "#16A34A",      // hijau grafik status baik
        danger: "#DC2626",       // merah grafik rusak berat
        warning: "#F97316",      // oranye rusak ringan
        background: "#E0F2FE",   // biru muda background halaman
        surface: "#FFFFFF",      // putih untuk card & konten
        textPrimary: "#0F172A",  // teks utama gelap
        textSecondary: "#475569" // teks sekunder abu-abu
      },
      fontFamily: {
        sans: ["Poppins", "Inter", "ui-sans-serif", "system-ui"],
      },
      borderRadius: {
        lg: "0.75rem",
        xl: "1rem",
        "2xl": "1.5rem",
      },
      boxShadow: {
        card: "0 4px 6px rgba(0,0,0,0.1)",
      },
    },
  },
  plugins: [],
}
