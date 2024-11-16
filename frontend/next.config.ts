import type { NextConfig } from "next";

const nextConfig: NextConfig = {
  // webpackの設定を変更
  webpack: (config, { dev }) => {
    if (dev) {
      // 開発環境のみhttpsを無効化
      config.devServer = {
        ...(config.devServer || {}),
        https: false, // httpsを無効にする
      };
    }
    return config;
  },
};

export default nextConfig;
