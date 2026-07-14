import { Geist, Geist_Mono } from "next/font/google";
import "./globals.css";

const geistSans = Geist({
  variable: "--font-geist-sans",
  subsets: ["latin"],
  weight: ["400", "700", "800", "900"],
});

const geistMono = Geist_Mono({
  variable: "--font-geist-mono",
  subsets: ["latin"],
});

export const metadata = {
  title: "ABRAM DOLI S. | Full-Stack Programmer",
  description: "Premium Cinematic Dark Mode Portfolio of Abram Doli S., Full-Stack Programmer building Next.js & GSAP experiences.",
};

export default function RootLayout({ children }) {
  return (
    <html
      lang="en"
      className={`${geistSans.variable} ${geistMono.variable} h-full antialiased bg-[#0A0A0A] text-[#FFFFFF]`}
    >
      <body className="min-h-full bg-[#0A0A0A] text-[#FFFFFF] overflow-x-hidden selection:bg-[#E6DFD3] selection:text-[#0A0A0A]">
        {children}
      </body>
    </html>
  );
}
